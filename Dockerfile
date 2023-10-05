FROM wordpress:latest

# システムの依存関係のインストール
RUN apt-get update && apt-get install -y \
    curl \
    gnupg \
    lsb-release \
    tini && \
    gcsFuseRepo=gcsfuse-`lsb_release -c -s` && \
    echo "deb http://packages.cloud.google.com/apt $gcsFuseRepo main" | \
    tee /etc/apt/sources.list.d/gcsfuse.list && \
    curl https://packages.cloud.google.com/apt/doc/apt-key.gpg | \
    apt-key add - && \
    apt-get update && \
    apt-get install -y gcsfuse && \
    apt-get clean

# フォールバックマウントディレクトリの設定
ENV MNT_DIR /var/www/html

# gcsfuse_run.sh スクリプトをコンテナに追加
COPY gcsfuse_run.sh /usr/local/bin/gcsfuse_run.sh

# スクリプトが実行可能であることを確認
RUN chmod +x /usr/local/bin/gcsfuse_run.sh

# tiniを使用してゾンビプロセスとシグナルの転送を管理
ENTRYPOINT ["/usr/bin/tini", "--"]

# tiniにwrapperスクリプトを引数として渡す
CMD ["/usr/local/bin/gcsfuse_run.sh"]
