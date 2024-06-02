#! /bin/sh

git pull origin main

fnm use

npm i -g pnpm

pnpm install

pnpm run build

composer install -o --no-dev
