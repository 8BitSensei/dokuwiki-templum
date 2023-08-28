FROM lscr.io/linuxserver/dokuwiki:latest
ARG GH_TOKEN

COPY local.php /app/www/public/conf/local.php
COPY users.auth.php /app/www/public/conf/users.auth.php
COPY acl.auth.php /app/www/public/conf/acl.auth.php

WORKDIR /app/www/public/data/gitrepo
RUN apk add git
RUN git config --global user.name "8BitSensei"
RUN git config --global user.email "ctkevlahan@gmail.com"
RUN git config --global init.defaultBranch main
RUN git config --global --add safe.directory /app/www/public/data/gitepo
RUN git init 
RUN git remote add origin https://${GH_TOKEN}@github.com/8BitSensei/dokuwiki-templum 
RUN git fetch --all 
RUN git reset --hard origin/main

WORKDIR /app/www/public/lib/plugins
RUN mkdir -p /app/www/public/data/gitrepo/wiki/
RUN curl -LO https://github.com/woolfg/dokuwiki-plugin-gitbacked/releases/download/v2023-05-07/dokuwiki-plugin-gitbacked-2023-05-07.zip
RUN mkdir -p /app/www/public/lib/plugins/gitbacked
RUN unzip dokuwiki-plugin-gitbacked-2023-05-07.zip -d /app/www/public/lib/plugins/gitbacked

