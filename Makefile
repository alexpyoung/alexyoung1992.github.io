VERSION=3.8
IMAGE=jekyll/jekyll:${VERSION}
SRC=`pwd`
HOST_PORT=4000

DEST=/srv/jekyll
CONTAINER_PORT=4000
DOCKERD=/Applications/Docker.app

serve: clean install
	docker run --rm -ti --publish=${HOST_PORT}:${CONTAINER_PORT} --volume=${SRC}:${DEST} ${IMAGE} jekyll serve

restart:
	docker restart `docker ps --quiet --filter "ancestor=${IMAGE}"`

build: clean install
	docker run --rm -ti --volume=${SRC}:${DEST} ${IMAGE} jekyll build

install:
	brew -v || /usr/bin/ruby -e `curl -fsSL https://raw.githubusercontent.com/Homebrew/install/master/install`
	docker -v || brew cask install docker
	[[ `ps aux | grep "${DOCKERD}" | grep -v grep | wc -l` -gt 0 ]] || (open ${DOCKERD} && echo 'Waiting for the Docker daemon to start' && sleep 30)

clean:
	rm -rf .sass-cache
	rm -rf _site
