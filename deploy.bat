@echo off

:: PRE-TASK: Run bundle.bat
bundle.bat

:: Check if files exist
if not exist composer.json (
    echo composer.json not found
    exit /B 1
)

if not exist composer.remote.json (
    echo composer.remote.json not found
    exit /B 1
)

:: Step 1: Rename composer.json to composer.tmp.json
ren composer.json composer.tmp.json

:: Step 2: Rename composer.remote.json to composer.json
ren composer.remote.json composer.json

:: Step 3: Make a composer update
start /wait "" "composer" update

:: Step 4: Make a GIT commit with message "forge deploy" (even if no changes)
git add --all
git commit --allow-empty -m "forge deploy"

:: Step 5: Make a GIT Force Push on the branch "dev"
git push --force origin dev

:: Step 6: Rename back composer.json to composer.remote.json
ren composer.json composer.remote.json

:: Step 7: Rename back composer.tmp.json to composer.json
ren composer.tmp.json composer.json

:: Step 8: Make again composer update
start /wait "" "composer" update

echo All tasks completed successfully.
