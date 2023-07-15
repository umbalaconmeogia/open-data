# open-data

A web site to view some open data such as zipcode from Japan Post, or Corporation number from National Tax Agency.

It is developed base on PHP framework yii2 version 2.0.48.

## Setup web application

* Pull from github
  ```shell
  git clone git@github.com:umbalaconmeogia/japan-zipcode-viewer.git
  ```
* Install PHP library dependencies
  ```shell
  cd src/app
  composer install
  ```
* Start the server from command line (on development PC)
   ```shell
   php yii serve --port=8888
   ```
   then access from http://localhost:8888/