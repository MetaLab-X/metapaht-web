rm -rf ./dist
npm run build
mv ./dist/metapaht/* ./dist
firebase deploy
