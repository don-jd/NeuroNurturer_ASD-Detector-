# Assuming you have a model loaded and test data loaded
# Make predictions
y_pred = model.predict("C:\xampp\htdocs\djlm\test")

# Convert predictions to binary values (0 or 1 for classification)
y_pred_binary = (y_pred > 0.5).astype("int32")

# Evaluate the model
from sklearn.metrics import accuracy_score, precision_score, recall_score, f1_score
accuracy = accuracy_score(y_test, y_pred_binary)
precision = precision_score(y_test, y_pred_binary)
recall = recall_score(y_test, y_pred_binary)
f1 = f1_score(y_test, y_pred_binary)

# Display the results
print(f"Accuracy: {accuracy}")
print(f"Precision: {precision}")
print(f"Recall: {recall}")
print(f"F1-score: {f1}")
