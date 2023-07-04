## This API has been completely rewritten/redesigned in Fastify (NodeJS)

## Stiletto PHP API

This API is designed to be hosted in any hosting with SLIM 4.

[Documentation](https://bump.sh/doc/stiletto-api)

### Stiletto Project

Frotend from this project: https://github.com/dm94/stiletto-web

Web with different utilities for the game Last Oasis, but is not affiliated with [Donkey Crew](https://www.donkey.team/)

It is created with JS (react), HTML, CSS (bootstrap) and PHP API

You can see this website in operation here: [https://www.stiletto.live/](https://www.stiletto.live/)

#### Images

In the same place as the API I also host the images that the web loads.
These images are placed in different folders as follows:

- "maps" : It contains the maps generated with leaflet each map has its own folder and in the main folder it contains a image of each map
- "markers" : Custom markers for each resource are placed with the resource name in .png format. If the resource has spaces it is replaced by \_ and each word is written with the first letter in capital letters. Example: Nibiran Mineral => Nibiran_Mineral.png
- "items" : Images for each item are placed with the name of the item in .png format. If the resource has spaces it is replaced by \_ and each word is written with the first letter in capital letters. Example: Nibiran Mineral => Nibiran_Mineral.png

#### Generate maps

Library: [gdal2tiles-leaflet](https://github.com/commenthol/gdal2tiles-leaflet)

Command to generate it:
`python gdal2tiles.py -l -p raster -z 0-5 -w none <image> <folder>`

#### Generate the API in SLIM4

Tool: [openapi-generator](https://github.com/openapitools/openapi-generator)

Command to generate it:
`openapi-generator-cli generate -i stiletto.yaml -g php-slim4 -o ./api/`
