@echo off

REM Rename composer.json to composer.tmp.json
rename composer.json composer.tmp.json

REM Rename composer.remote.json to composer.json
rename composer.remote.json composer.json

REM Commit changes with the message "wip"
git add .
git commit -m "wip"

REM Store the current branch name
for /f "tokens=*" %%a in ('git rev-parse --abbrev-ref HEAD') do set CURRENT_BRANCH=%%a

REM Check if the "dev" branch is checked out
if "%CURRENT_BRANCH%"=="dev" (
    echo The "dev" branch is currently checked out. Switching to "master" or "main" branch temporarily.
    git checkout master || git checkout main
)

REM Force push the changes to the "dev" branch in the remote repository
git push --force origin HEAD:dev

REM Fetch changes from the remote repository
git fetch origin

REM Reset the local "dev" branch to match the remote "dev" branch
git branch -f dev origin/dev

REM Checkout the previous branch
git checkout %CURRENT_BRANCH%

REM Reset the git state to undo the last commit
git reset HEAD~1

REM Revert the filenames to the original state
rename composer.json composer.remote.json
rename composer.tmp.json composer.json

REM Clear the environment variable
set CURRENT_BRANCH=
