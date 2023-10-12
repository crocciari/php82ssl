# php82ssl
Install php 8.2 with apache server and ssl certificate

Always run directly from your project's root folder.

## execute this server
sudo docker-compose up -d --build


## stop this server
sudo docker-compose down

## generate certificate

> [!IMPORTANT]
> The certificate is already generated in the correct folder

But if it is necessary to generate it again, just execute the following line:

./.docker/apache/create-cert.sh

## Where do I place my developed codes
Your project files can be placed directly in the root folder.