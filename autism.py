import pandas as pd
sample = pd.read_csv("autism.csv")

f = open("autism.txt","w")
for i in sample.index:
    #print(b)
    #print(str(sample.loc[i]["Age group"]))
    f.write("insert into prevalence(age_group,year2018,year2015) values('{}','{}','{}');"
            .format(str(sample.loc[i]["Age group"]),
                    str(sample.loc[i]["2018"]),
                    str(sample.loc[i]["2015"])))
f.close()
