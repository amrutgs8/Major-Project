# import required modules
import mysql.connector
import sys

id=int(sys.argv[1])

import numpy as np
import pandas as pd
import matplotlib.pyplot as plt
#p%matplotlib inline
import seaborn as sns
import warnings
warnings.filterwarnings('ignore')

df=pd.read_csv("Book1.csv")


#df.head()

#df.info()

df.isnull().sum()

### fill the Missing Values in "LoanAmount" & "Credit_History" by the 'Mean' & 'Median' of the respective variables  ###
#df['LoanAmount'] = df['LoanAmount'].fillna(df['LoanAmount'].mean())

df['Credit_History'] = df['Credit_History'].fillna(df['Credit_History'].median())

df.isnull().sum()    ### confirm if there are any missing values in 'LoanAmount' & 'Credit_History'

df.dropna(inplace=True)  ### drop all the missing values remaining
df.isnull().sum()       ### check once again


'''
plt.figure(figsize = (100, 50))
sns.set(font_scale = 5)
plt.subplot(331)
sns.countplot(df['Gender'],hue=df['Loan_Status'])

plt.subplot(332)
sns.countplot(df['Married'],hue=df['Loan_Status'])

plt.subplot(333)
sns.countplot(df['Education'],hue=df['Loan_Status'])

plt.subplot(334)
sns.countplot(df['Self_Employed'],hue=df['Loan_Status'])

plt.subplot(335)
sns.countplot(df['Property_Area'],hue=df['Loan_Status'])


'''

df['Loan_Status'].replace('Y',1,inplace=True)
df['Loan_Status'].replace('N',0,inplace=True)


df['Loan_Status'].value_counts()   ### The data in Numerical form avoids disturbances in building the model.

'''df.Gender=df.Gender.map({'Male':1,'Female':0})
df['Gender'].value_counts()'''

df.Married=df.Married.map({'Yes':1,'No':0})
df['Married'].value_counts()

df.Dependents=df.Dependents.map({'0':0,'1':1,'2':2,'3+':3})
df['Dependents'].value_counts()

df.Education=df.Education.map({'Graduate':1,'Not Graduate':0})
df['Education'].value_counts()

df.Self_Employed=df.Self_Employed.map({'Yes':1,'No':0})
df['Self_Employed'].value_counts()
'''
df.Property_Area=df.Property_Area.map({'Urban':2,'Rural':0,'Semiurban':1})
df['Property_Area'].value_counts()

df['LoanAmount'].value_counts()

df['Loan_Amount_Term'].value_counts()
'''
df['Credit_History'].value_counts()

df['Cibil_Score'].value_counts()

#df.head()




from sklearn.model_selection import train_test_split
from sklearn.linear_model import LogisticRegression
from sklearn import metrics


from sklearn.model_selection import train_test_split
from sklearn.linear_model import LogisticRegression
from sklearn import metrics


# Python program to get
# current date
  
  
# Import date class from datetime module
from datetime import date



X = df.iloc[1:542,0:7].values
y = df.iloc[1:542,7].values

X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.3,random_state=0)

model = LogisticRegression()
model.fit(X_train,y_train)


Xyz=[[1,3,1,1,0,300,0]]


lr_prediction = model.predict(Xyz)


if lr_prediction==1:
  print(" Loan can be given to account holder  =  "+ str(id))
  print()

  start=date(2022,1,1)
  end=date(2022,12,31)
  today = date.today()
  difference = today-start
  left=end-today
  days_left=abs(left.days)

  daydiff=abs(difference.days)


  con = mysql.connector.connect(
  host="localhost", user="root",
  password="", database="pigmynew")
  
# create cursor object
  cursor = con.cursor()
  
# assign data query
  query1 = "desc collections"
  
# executing cursor
  cursor.execute(query1)
  
# display all records
  table = cursor.fetchall()
# assign data query
  query2 = "select * from collections"

# executing cursor
  cursor.execute(query2)
  
# display all records
  table = cursor.fetchall()
  
# fetch all columns
  total_collection=0
  
  for row in table:
      if row[1]==id:
        total_collection=total_collection+row[2]

  avg_collection=total_collection/daydiff
  print("Average Collection per day  =  "+ str(avg_collection))
  print()

  total_left=avg_collection*days_left

  total=total_collection+total_left

  amount_can_given=total/(1+(22*days_left/36500))

  amount_tobe_paid=avg_collection*365-total_collection

  interest=avg_collection*365-amount_can_given

  print("Loan of amount  =  " +str(amount_can_given))
  print()
  print("account holder  =  " +str(id))
  print()
  print("Already Deposited Amount  =  " +str(total_collection))
  print()
  print("Need to pay with interest  =  " +str(amount_tobe_paid))
  print()
  print("Profit For Admin  =  " +str(interest))
  print()
  print("Need to pay above amount to complete loan")
  print()
  
  cursor.close()
  
# closing connection object
  con.close()

else:
  print("Loan cant be given to him as acount holder doesnt meet constraints")
  
# Python program to get
# current date

# Import date class from datetime module
# closing cursor connection
