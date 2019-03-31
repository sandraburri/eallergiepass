# Generate Manifest JSON

* Visit https://app-manifest.firebaseapp.com/
* Upload the 512x512 version of the image stored in `./docs/logo/logo-512x512.png`
* Configure the settings such that the manifest.json preview shows:

```JSON
{
  "name": "eAllergiepass",
  "short_name": "eAllergiepass",
  "theme_color": "#ffcc00",
  "background_color": "#888888",
  "display": "standalone",
  "orientation": "portrait",
  "scope": "/",
  "start_url": "/"
}
```

* Generate zip.
* Extract to `/public/`.