import pandas as pd
sample = pd.read_csv("museums.csv")

f = open("artdata.txt","w")
for i in sample.index:
    #a = str(sample.loc[i]["Waste category"]).replace("non-recyclable","2")
    #b = a.replace("recyclable", "1")
    #print(b)
    #print(str(sample.loc[i]["ID"]))
    if str(sample.loc[i]["Museum Type"]) == "ART MUSEUM":
        #print(str(sample.loc[i]["Museum Name"]),str(sample.loc[i]["Museum Type"]))
        #print(type(str(sample.loc[i]["Street Address (Administrative Location)"])))
        f.write("insert into art_museum(museumName,museumType,museumAddress) values('{}','{}','{}');".format(str(sample.loc[i]["Museum Name"]),str(sample.loc[i]["Museum Type"]),str(sample.loc[i]["Street Address (Administrative Location)"])))
        #f.write("insert into art_museum(museumName) values('{}');".format(str(sample.loc[i]["Museum Name"])))

f.close()
