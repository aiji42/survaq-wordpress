#!/bin/bash

# GCS バケットとローカルディレクトリ
GCS_BUCKET="gs://survaq-wordpress"
LOCAL_DIR="/var/www/html"

# GCSからローカルへの同期
gsutil -m rsync -r $GCS_BUCKET $LOCAL_DIR

# Apacheがアクセスできるように権限を変更
chown -R www-data:www-data $LOCAL_DIR
chmod -R 755 $LOCAL_DIR

# ローカルの変更を監視し、変更があった場合のみGCSに書き込む
#inotifywait -m -e modify,create,delete --format '%w%f' $LOCAL_DIR |
#while read file; do
#  echo "Changed: $file"
#  gsutil cp $file $GCS_BUCKET/$(basename $file)
#done &  # バックグラウンドで実行

# WordPressの元のエントリポイントコマンドを実行
exec docker-entrypoint.sh apache2-foreground