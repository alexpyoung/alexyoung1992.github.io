VERSION=3.8
IMAGE=jekyll/jekyll:${VERSION}
SRC=`pwd`
HOST_PORT=4000

DEST=/srv/jekyll
CONTAINER_PORT=4000

build: clean
	docker run --rm -ti --volume=${SRC}:${DEST} ${IMAGE} jekyll build

serve: clean
	docker run --rm -ti --publish=${HOST_PORT}:${CONTAINER_PORT} --volume=${SRC}:${DEST} ${IMAGE} jekyll serve

restart:
	docker restart `docker ps --quiet --filter "ancestor=${IMAGE}"`

clean:
	rm -rf .sass-cache
	rm -rf _site
