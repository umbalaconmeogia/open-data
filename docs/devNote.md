# Dev note

## To use developing extensions (on local disk)

* Add to composer.json#repositories
    ```json
        "repositories": [
            {
                "type": "path",
                "url": "D:/data/projects.it/openSource/japan-zipcode/yii2-japanpost-zipcode-csv"
            },
            {
                "type": "path",
                "url": "D:/data/projects.it/openSource/japan-zipcode/yii2-japan-corporate-number-csv"
            },
            // Other stuff.
        ]
    ```
* Update extension
    ```shell
    composer require umbalaconmeogia/yii2-japanpost-zipcode-csv
    composer require umbalaconmeogia/yii2-japan-corporate-number-csv
    ```