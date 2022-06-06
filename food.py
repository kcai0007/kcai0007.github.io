import pandas as pd
sample = pd.read_csv("foodss.csv")

f = open("food.txt","w", encoding='utf-8')
for i in sample.index:
    if str(sample.loc[i]["food_group"]) == "Fruits" or str(sample.loc[i]["food_group"]) == "Vegetables":
        f.write("insert into food(foodName,scientificName,foodGroup,foodSubGroup) values('{}','{}','{}','{}');"
                .format(str(sample.loc[i]["name"]),
                        str(sample.loc[i]["name_scientific"]),
                        str(sample.loc[i]["food_group"]),
                        str(sample.loc[i]["food_subgroup"])
                        ))
f.close()




