#!/usr/bin/env bash
set -eo pipefail

# サービスのためのマウントディレクトリを作成
mkdir -p $MNT_DIR

echo "Mounting GCS Fuse."
gcsfuse --debug_gcs --debug_fuse $BUCKET $MNT_DIR
echo "Mounting completed."

# WordPress用にマウントポイントを/var/www/htmlにシンボリックリンクとして設定
ln -sf $MNT_DIR/* /var/www/html/

# Apacheをバックグラウンドで実行
apache2-foreground &
# Exit immediately when one of the background processes terminate.
wait -n
