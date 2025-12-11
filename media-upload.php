curl -X POST \
  -H "Authorization: Basic base64" \
  -H "Content-Disposition: attachment; filename=\"sunset.jpg\"" \
  -H "Content-Type: image/jpeg" \
  --data-binary "@sunset.jpg" \
  "https://example.com/wp-json/wp/v2/media"
