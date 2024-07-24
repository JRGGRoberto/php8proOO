@echo off
cls
SETLOCAL ENABLEDELAYEDEXPANSION
:: the two blank lines are required!
set NLM=^


set NL=^^^%NLM%%NLM%^%NLM%%NLM%
:: Example Usage:

Set TextoOut=,
:: some logic here finds an error condition and appends the error report
set TextoOut=!TextoOut!!NL!    "autoload":{        "psr-4":{!NL!            "app\\":"app"!NL!        },!NL!        "files":[!NL!        ]!NL!    }

REM echo %TextoOut%
echo De um [Contrl] [V] no ficheiro composer.json, logo depois de "require": {}
echo %TextoOut% > ./copia.txt
REM clip < %TextoOut%
clip < ./copia.txt
del copia.txt /Q/F

echo Criando diretórios
type nul > .gitignore
echo vendor > .gitignore
mkdir .\app
mkdir .\app\controllers
mkdir .\app\core
mkdir .\app\database
mkdir .\app\database\models
mkdir .\app\helpers
mkdir .\app\support
mkdir .\app\traits
mkdir .\app\views
mkdir .\app\routes
mkdir .\public
mkdir .\public\css
mkdir .\public\js
echo Diretórios criados com sucesso!
echo Iniciando o composer init
echo Aperte Enter para todas as opções exceto [scr] n
call composer init
ECHO Depois de criado o arquivo composer.json
echo De um [Contrl] [V] no ficheiro composer.json, logo depois de "require": {}
ECHO depois do salvar o arquivo volte aqui para continuar
pause
echo atualizando arquivo composer.json
call composer du
Echo arquivos do projeto criados com sucesso!!!
