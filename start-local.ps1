$ErrorActionPreference = 'Stop'

if (-not (Get-Command php -ErrorAction SilentlyContinue)) {
    $phpPath = Get-ChildItem "$env:LOCALAPPDATA\Microsoft\WinGet\Packages" -Recurse -Filter php.exe -ErrorAction SilentlyContinue | Select-Object -First 1 -ExpandProperty FullName
    if (-not $phpPath) {
        throw 'PHP no está instalado. Instálalo con: winget.exe install --id PHP.PHP.8.4 -e --source winget'
    }
} else {
    $phpPath = (Get-Command php).Source
}

Push-Location $PSScriptRoot
try {
    & $phpPath -S 127.0.0.1:8000 -t .
} finally {
    Pop-Location
}
