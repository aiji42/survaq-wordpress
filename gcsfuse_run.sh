#!/usr/bin/env bash
set -eo pipefail

GCS_BUCKET="your-gcs-bucket-name"
LOCAL_DIR="/var/www/html/wp-content"

mkdir -p $LOCAL_DIR/themes $LOCAL_DIR/plugins $LOCAL_DIR/upgrade

echo "Mounting GCS Fuse."
gcsfuse --debug_gcs --debug_fuse --implicit-dirs --experimental-local-file-cache -o allow_other $GCS_BUCKET/wp-content/themes $LOCAL_DIR/themes
gcsfuse --debug_gcs --debug_fuse --implicit-dirs --experimental-local-file-cache -o allow_other $GCS_BUCKET/wp-content/plugins $LOCAL_DIR/plugins
gcsfuse --debug_gcs --debug_fuse --implicit-dirs --experimental-local-file-cache -o allow_other $GCS_BUCKET/wp-content/upgrade $LOCAL_DIR/upgrade
echo "Mounting completed."

# Apacheをバックグラウンドで実行
apache2-foreground &
# Exit immediately when one of the background processes terminate.
wait -n