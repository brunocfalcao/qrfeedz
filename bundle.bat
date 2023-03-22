@echo off

:: Set the source and destination paths
set "source_path=packages\qrfeedz\qrfeedz-frontend\package.json"
set "destination_path=package.json"

:: Check if the source file exists
if not exist "%source_path%" (
    echo Source file not found: %source_path%
    exit /B 1
)

:: Copy and replace the source file to the destination
copy /Y "%source_path%" "%destination_path%"

:: New tasks begin here

:: Task 1: Copy tailwind.config.js
set "source_path=packages\qrfeedz\qrfeedz-frontend\tailwind.config.js"
set "destination_path=tailwind.config.js"
if not exist "%source_path%" (
    echo Source file not found: %source_path%
    exit /B 1
)
copy /Y "%source_path%" "%destination_path%"

:: Task 2: Copy vite.config.js
set "source_path=packages\qrfeedz\qrfeedz-frontend\vite.config.js"
set "destination_path=vite.config.js"
if not exist "%source_path%" (
    echo Source file not found: %source_path%
    exit /B 1
)
copy /Y "%source_path%" "%destination_path%"

:: Task 3: Delete existing resources directory and copy new resources directory
set "source_path=packages\qrfeedz\qrfeedz-frontend\resources"
set "destination_path=resources"
if exist "%destination_path%" (
    rmdir /S /Q "%destination_path%"
)
if not exist "%source_path%" (
    echo Source directory not found: %source_path%
    exit /B 1
)
xcopy /E /I /Y "%source_path%" "%destination_path%"

:: Task 4: Run npm update command
start /wait "" "npm" update

:: Task 5: Run npm build command
start /wait "" "npm" run build

echo All tasks completed successfully.
