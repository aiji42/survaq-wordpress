#!/usr/bin/env bash
set -eo pipefail

echo "Mounting GCS Fuse."
gcsfuse --debug_gcs --debug_fuse -o allow_other $BUCKET $MNT_DIR
echo "Mounting completed."

# Apacheをバックグラウンドで実行
apache2-foreground &
# Exit immediately when one of the background processes terminate.
wait -n