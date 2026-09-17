# DEVELOPER NOTES - VIEW ON SPREADSHEET IN GOOGLE DRIVE FOLDER

---

### If you've made changes on your local device and want to push to GitHub in ONE commit:

git log --oneline (THIS SHOWS YOUR RECENT COMMITS. UNDERNEATH, REPLACE 'X' WITH THE AMOUNT OF PAST COMMITS YOU WANT TO COLLAPSE INTO ONE)

git reset --soft HEAD~X
git commit -m "message"
git push origin <branch-name>

#### Don't include the < > brackets

### If you want to save changes to an unfinished feature:

git stash -m "message"

#### If you swapped to another branch / want to safely restore your unfinished feature code:

git stash pop

#### You can also view all the stashes:

git stash list