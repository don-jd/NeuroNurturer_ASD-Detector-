

import pandas as pd
import pickle




df=pd.read_csv("test_aut.csv")
df.head()


clf=pickle.load(open('model_rf.sav', 'rb'))


val = clf.predict(df)




if val[0]==1:
        out="Suspected Autistic"
elif val[0]==0:
        out="Non Autistic"
print(out)

