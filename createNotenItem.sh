#!/bin/bash
# user/pages/04.choerchen-admin/
# user/pages/03.choerchen-intern/02.choerchennoten/ 

DUMMYSTR="DUMMY-TITLE"
DUMMYTAG="DUMMY-TAG"
DUMMYCAT="DUMMY-CAT"

dummy="./user/pages/04.choerchen-admin/dummy-noten"
newpath="./user/pages/03.choerchen-intern/02.choerchennoten"
#newpath="./user/pages/04.choerchen-admin"

itemname="noten_item.md"
newcat="Noten"

newtitle=$1	
newtag=$2

if [[ -z $newtitle ]]
then
	echo "Parameter <title> is missing!"
	echo "Usage: "
	echo "./createNotenItem <title> [<tag>]"
	exit
fi

echo "Title=<"$newtitle">"
newfolder="${newtitle// /_}" 
newfolder=$(echo $newfolder | tr -d '[:cntrl:]' | tr '[:upper:]' '[:lower:]')
newfolder="${newfolder//Ä/ae}"
newfolder="${newfolder//ä/ae}"
newfolder="${newfolder//Ö/oe}"
newfolder="${newfolder//ö/oe}"
newfolder="${newfolder//Ü/ue}"
newfolder="${newfolder//ü/ue}"
newfolder="${newfolder//ß/ss}"
echo "Folder=<"$newfolder">"

if [[ -d "$newpath/$newfolder" ]]
then
	echo ""
	echo "Ein Folder mit dem Namen <$newpath/$newfolder> existiert bereits!"
	echo ""
	exit
fi

cp -pr $dummy $newpath/$newfolder

FILENAME=$newpath/$newfolder/$itemname
echo "Filename=<"$FILENAME">"

if [[ -e $FILENAME ]]
then
	sed -i "s/${DUMMYSTR}/${newtitle}/g" $FILENAME
	sed -i "s/${DUMMYTAG}/${newtag}/g" $FILENAME
	sed -i "s/${DUMMYCAT}/${newcat}/g" $FILENAME
else
	echo "new file $FILENAME is missing!"
fi

ls -l $newpath/$newfolder
