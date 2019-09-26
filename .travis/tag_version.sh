VERSION_CLASS=src/FacebookAds/ApiConfig.php

VERSION=$(sed -n "s/.*SDKVersion = '\(.*\)\';/\1/p" $VERSION_CLASS)
GIT_RAW_TAG=$(git describe --abbrev=0 --tags)

echo $VERSION
echo $GIT_RAW_TAG

if [ "$VERSION" == "$GIT_RAW_TAG" ]; then
  echo 'versions are updated, no need to add new tag.'
else
  echo 'versions are not updated, start to add new tag.'
  git tag $VERSION -a -m "Version $VERSION" || die "get error when add new tag"
  echo 'push tag...'
  git push origin $VERSION
fi
