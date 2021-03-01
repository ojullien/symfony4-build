# Construisez un site web à l’aide du framework Symfony 4

## Setup

### Symfony certificate

Install certutil tool: `apt install libnss3-tools`

Install certificate: `symfony server:ca:install`

### Symfony CLI

Download and install CLI: `wget https://get.symfony.com/cli/installer -O - | bash`

Write into profile : `export PATH="$HOME/.symfony/bin:$PATH"`

## Creating Symfony applications

Install web-skeleton: `symfony new my_project_name --version=4.4 --full`

## Running Symfony Applications

Start php server: `symfony server:start`

Open your browser and navigate to: http://localhost:8000/
