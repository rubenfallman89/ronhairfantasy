const express = require('express');
const app = express();
const port = 3000;

// Ruta para servir el archivo index.html y styles.css
app.use(express.static(__dirname));

app.listen(port, () => {
  console.log(`El servidor está funcionando en http://localhost:${port}`);
});
