<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Define the CSV file path
    $csvFilePath = "data.csv";

    // Extract form data
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $ethnicity = $_POST["ethnicity"];
    $blood_pressure = $_POST["blood_pressure"];
    $blood_glucose = $_POST["blood_glucose"];
    $serum_creatinine = $_POST["serum_creatinine"];
    $egfr = $_POST["egfr"];
    $diabetes_status = $_POST["diabetes_status"];
    $hypertension_status = $_POST["Hypertension_status"];
    $current_smoker = $_POST["Smoking_habits_Current_smoker"];
    $former_smoker = $_POST["Smoking_habits_Former_smoker"];
    $never_smoked = $_POST["Smoking_habits_Never_smoked"];
    $alcohol_consumption = $_POST["Alcohol_consumption_Yes"];
    $physical_activity_low = $_POST["Physical_activity_levels_Low"];
    $physical_activity_moderate = $_POST["Physical_activity_levels_Moderate"];
    $physical_activity_high = $_POST["Physical_activity_levels_High"];
    $medication_history = $_POST["Medication_history_Yes"];
    $blood_urea_nitrogen = $_POST["Blood_urea_nitrogen"];
    $biometric_measurements = $_POST["Biometric_measurements"];

    // Prepare the data as an array
    $data = array(
        $age, $gender, $ethnicity, $blood_pressure, $blood_glucose, 
        $serum_creatinine, $egfr, $diabetes_status, $hypertension_status,
        $current_smoker, $former_smoker, $never_smoked, $alcohol_consumption,
        $physical_activity_low, $physical_activity_moderate, $physical_activity_high,
        $medication_history, $blood_urea_nitrogen, $biometric_measurements
    );

    // Append data to CSV file
    $file = fopen($csvFilePath, "a");
    fputcsv($file, $data);
    fclose($file);

    // Redirect back to the form with a success message
    header("Location: index.html?status=success");
    exit();
} else {
    // If the form is not submitted, redirect to index.html
    header("Location: index copy.html");
    exit();
}
?>
