#! /bin/sh
fnm use

npm i -g pnpm

pnpm install

pnpm run build

composer install -o --no-dev
