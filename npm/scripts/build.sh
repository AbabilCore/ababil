#!/usr/bin/bash

# Clean dist directory
echo "Cleaning dist directory..."
rm -rf dist

# Build with tsup
echo "Building with tsup..."
npx tsup

# Copy data.json to dist
echo "Copying data.json..."
cp ../data.json dist/

# Make the output file executable
chmod +x dist/index.js

echo "✅ Build complete!"
