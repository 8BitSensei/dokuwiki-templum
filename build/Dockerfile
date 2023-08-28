FROM lscr.io/linuxserver/dokuwiki:latest
ARG GH_TOKEN

COPY local.php /app/www/public/conf/local.php
RUN chmod 7777 /app/www/public/conf/local.php
COPY users.auth.php /app/www/public/conf/users.auth.php
RUN chmod 7777 /app/www/public/conf/users.auth.php
COPY acl.auth.php /app/www/public/conf/acl.auth.php
RUN chmod 7777 /app/www/public/conf/acl.auth.php

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

# Bootstrap3 theme
WORKDIR /app/www/public/lib/tpl
RUN curl -L -o bootstrap3.zip https://codeload.github.com/giterlizzi/dokuwiki-template-bootstrap3/legacy.zip/refs/heads/master
RUN mkdir -p /app/www/public/lib/tpl/bootstrap3
RUN unzip bootstrap3.zip -d /app/www/public/lib/tpl/bootstrap3

# Gitbacked plugin
WORKDIR /app/www/public/lib/plugins
RUN curl -L -o gitbacked.zip https://github.com/woolfg/dokuwiki-plugin-gitbacked/releases/download/v2023-05-07/dokuwiki-plugin-gitbacked-2023-05-07.zip
RUN mkdir -p /app/www/public/lib/plugins/gitbacked
RUN mkdir -p /app/www/public/data/gitrepo/wiki/
RUN unzip gitbacked.zip -d /app/www/public/lib/plugins/gitbacked

# Publish plugin
RUN curl -L -o publish.zip https://codeload.github.com/cosmocode/dokuwiki-plugin-publish/legacy.zip/refs/heads/master
RUN mkdir -p /app/www/public/lib/plugins/publish
RUN unzip publish.zip -d /app/www/public/lib/plugins/publish

# Geophp plugin
RUN curl -L -o geophp.zip https://codeload.github.com/mprins/dokuwiki-plugin-geophp/zip/refs/heads/master
RUN mkdir -p /app/www/public/lib/plugins/geophp
RUN unzip geophp.zip -d /app/www/public/lib/plugins/geophp

# Geotag plugin
RUN curl -L -o geotag.zip https://codeload.github.com/mprins/dokuwiki-plugin-geotag/zip/refs/heads/master
RUN mkdir -p /app/www/public/lib/plugins/geotag
RUN unzip geotag.zip -d /app/www/public/lib/plugins/geotag

# Openlayers map plugin
RUN curl -L -o openlayersmap.zip https://codeload.github.com/mprins/dokuwiki-plugin-openlayersmap/zip/refs/heads/master
RUN mkdir -p /app/www/public/lib/plugins/openlayersmap
RUN unzip openlayersmap.zip -d /app/www/public/lib/plugins/openlayersmap

# Wrap plugin
RUN curl -L -o wrap.zip https://codeload.github.com/selfthinker/dokuwiki_plugin_wrap/zip/refs/tags/stable
RUN mkdir -p /app/www/public/lib/plugins/wrap
RUN unzip wrap.zip -d /app/www/public/lib/plugins/wrap