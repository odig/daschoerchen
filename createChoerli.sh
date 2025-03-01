#!/bin/bash
# user/pages/04.choerchen-admin/
# user/pages/03.choerchen-intern/04.choerchenmitglieder/ 

DUMMYNAME="DUMMY-NAME"
DUMMYVOICE="DUMMY-VOICE"
DUMMYFIRST="DUMMY-FIRSTNAME"
DUMMYSUR="DUMMY-SURNAME"
DUMMYLOC="DUMMY-LOCATION"


dummy="./user/pages/04.choerchen-admin/dummy-choerli"
newpath="./user/pages/03.choerchen-intern/04.choerchenmitglieder"

itemname="people.md"

newfirst=$1
newsur=$2
newvoice=$3
newloc=$4
newname=$5
if [[ -z $5 ]]
then
	newname=$newfirst
fi

if [[ -z $newfirst ]]
then
	echo "Parameter are missing!"
	echo "Usage: "
	echo "./createChoerli <vorname> <nachname> <stimme> <ort> [<name>]"
	exit
fi

echo "Name=<"$newname">"
newfolder="${newname// /_}" 
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
	sed -i "s/${DUMMYNAME}/${newname}/g" $FILENAME
	sed -i "s/${DUMMYFIRST}/${newfirst}/g" $FILENAME
	sed -i "s/${DUMMYSUR}/${newsur}/g" $FILENAME
	sed -i "s/${DUMMYFIRST}/${newfirst}/g" $FILENAME
	sed -i "s/${DUMMYLOC}/${newloc}/g" $FILENAME
	sed -i "s/${DUMMYVOICE}/${newvoice}/g" $FILENAME
else
	echo "new file $FILENAME is missing!"
fi

ls -l $newpath/$newfolder

echo ""
echo ""

