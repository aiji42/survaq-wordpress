FROM wordpress:latest

# 必要なツールのインストール
RUN apt-get update && apt-get install -y gsutil inotify-tools

# entrypoint.shをコンテナにコピー
COPY entrypoint.sh /scripts/entrypoint.sh

# 実行権限を付与
RUN chmod +x /scripts/entrypoint.sh

# カスタムエントリポイントの設定
ENTRYPOINT ["/scripts/entrypoint.sh"]
