# Purpose

This repo allows for the immediate and simple use of a docker container running php and apache.

# Usage
You can pull this image from dockerhub using:
```
docker pull stackhub/apache:latest
```

You can run this image as follows:
```
docker run -d -p 8080:80 stackhub/apache
```

If you visit your host:8080, you'll see a helloworld message from the container.


# License

MIT
