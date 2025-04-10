const express = require('express')
const path = require('path')
const app = express()
const PORT = process.env.PORT || 3000

// Serve static files from the 'public' folder
app.use(express.static('public'))

// Catch-all route using regex
app.get(/.*/, (req, res) => {
    res.sendFile(path.resolve(__dirname, 'public', 'index.html'))
})

app.listen(PORT, () => {
    console.log(`Server running on port ${PORT}`)
})