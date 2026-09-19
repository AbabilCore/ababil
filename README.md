# Ababil - CLI Portfolio

[![npm version](https://img.shields.io/npm/v/ababil.svg)](https://www.npmjs.com/package/ababil)
[![Packagist Version](https://img.shields.io/packagist/v/ababil/ababil.svg)](https://packagist.org/packages/ababil/ababil)
[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)

A beautiful CLI portfolio available for both Node.js (npm) and PHP (Composer). Display your skills, projects, and contact info in a stunning terminal interface with gradient colors and emoji support.

## Features

- Beautiful gradient colors
- Full emoji support
- Dual platform support (npm & Composer)
- Zero configuration
- Professional terminal UI
- Easy to customize

## Installation

### Node.js (npm)

```bash
npx ababil
```

### PHP (Composer)

```bash
composer global require ababil/ababil && ababil
```

## Requirements

**Node.js**

- Node.js >= 18

**PHP**

- PHP >= 7.4
- Composer
- ext-json

## Development

```bash
# Build both packages
make build

# Run npm version
make run-npm

# Run composer version
make run-composer
```

### Project Structure

```
ababil/
├── npm/                  # Node.js/TypeScript implementation
│   ├── src/
│   └── package.json
├── composer/             # PHP implementation
│   ├── src/
│   └── bin/
├── composer.json         # Root composer config
└── data.json            # Portfolio data
```

## License

MIT © [Ababil Hossain](https://github.com/AbabilCore)

## Connect

- Website: [devababil.com](https://devababil.com)
- GitHub: [@AbabilCore](https://github.com/AbabilCore)
- Email: ababil.webdev@gmail.com
