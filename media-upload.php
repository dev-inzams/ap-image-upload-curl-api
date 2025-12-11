curl -X POST \
  -H "Authorization: Basic echo -n "technuxt@gmail.com:57pn lT9A MmKN zuGA ScGN LVj9" | base64" \
  -H "Content-Disposition: attachment; filename=\"sunset.jpg\"" \
  -H "Content-Type: image/jpeg" \
  --data-binary "@sunset.jpg" \
  "https://example.com/wp-json/wp/v2/media"
