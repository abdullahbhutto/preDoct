<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>New Patient Form</title>
    <link rel="stylesheet" type="text/css" href="Patientformstyle.css" />
</head>
<body>
    <div class="parent-div">
        <h1>PATIENT-CHECK-IN-FORM</h1>
        

        <form action="manage_patientdata.php" method="POST">

            <p>General Patient Information</p>

            <table>

                <h2>Gender</h2>

                <tr>

                    <td><input type="radio" name="gender" value="male" />Male</td>
                    <td><input type="radio" name="gender" value="female" />Female</td>
                </tr>


                <tr>
                    <td><input type="text" placeholder="First Name" name="fname" /></td>
                    <td><input type="text" placeholder="Last Name" name="lname" /></td>

                </tr>

                <tr>
                    <td><input type="text" placeholder="Patient Email" name="patientemail" /></td>
                    <td><input type="text" placeholder="Contact No" name="contactno" /></td>

                </tr>

                <tr>
                    <td><input type="text" placeholder="Age (Years)" name="age" /></td>
                    <td><input type="text" placeholder="Weight (kg)" name="weight" /></td>

                </tr>
            </table>


            <label>
                <input type="text" placeholder="Reason for seeing the Dr" name="reason" value="">
            </label><br />

            <br />



            <br />

            <h2>Who Reffered You To Us?</h2>

            <label>
                <input type="text" placeholder="Doctor/Hospital Name" name="reffer" value="">
            </label><br />

            <br />


            <p>Patient Medical History</p>

            <!-- Question 1 -->
            <br />
            <h2>Please list any drug allergies.</h2>

            <textarea id="" name="allergies" rows="5" cols="30">Enter Text Here...
            </textarea>



            <h2>
                Have you ever had (Please select all that apply).
            </h2>
            <!-- Here are the choices for the first question. Each input tag must have the same name. For this question, the name is q1. -->
            <!-- The value is which answer the choice corresponds to. -->
            <label>
                <input type="checkbox" name="" value="c1">

                Diabetes
            </label><br />
            <label>
                <input type="checkbox" name="diseases" value="Asthma">
                Asthma
            </label><br />
            <label>
                <input type="checkbox" name="diseases" value="Heart Disease">
                Heart Disease
            </label><br />
            <label>
                <input type="checkbox" name="diseases" value="Cancer">
                Cancer
            </label><br />
            <label>
                <input type="checkbox" name="diseases" value="Anemia">
                Anemia
            </label><br />
            <label>
                <input type="checkbox" name="diseases" value="Emotional Disorder">
                Emotional Disorder
            </label><br />
            <label>
                <input type="checkbox" name="diseases" value="Gout">
                Gout
            </label><br />
            <label>
                <input type="checkbox" name="diseases" value="Epilepsy Seizures">
                Epilepsy Seizures
            </label><br />
            <label>
                <input type="checkbox" name="diseases" value="Fainting Spells">
                Fainting Spells
            </label><br />
            <label>
                <input type="checkbox" name="diseases" value="Gallstones">
                Gallstones
            </label><br />
            <label>
                <input type="checkbox" name="diseases" value="Arthritis">
                Arthritis
            </label><br />
            <label>
                <input type="checkbox" name="diseases" value="Heart Attack">
                Heart Attack
            </label><br />
            <label>
                <input type="checkbox" name="diseases" value="Rheumatic Fever">
                Rheumatic Fever
            </label><br />
            <label>
                <input type="checkbox" name="diseases" value="High Blood Pressure">
                High Blood Pressure
            </label><br />
            <label>
                <input type="checkbox" name="diseases" value="Digestive Problems">
                Digestive Problems
            </label><br />
            <label>
                <input type="checkbox" name="diseases" value="Ulcer Disease">
                Ulcer Disease
            </label><br />
            <label>
                <input type="checkbox" name="diseases" value="Hepatitis">
                Hepatitis
            </label><br />
            <label>
                <input type="checkbox" name="diseases" value="Kidney Disease">
                Kidney Disease
            </label><br />
            <label>
                <input type="checkbox" name="diseases" value="Liver Disease">
                Liver Disease
            </label><br />
            <label>
                <input type="checkbox" name="diseases" value="Use a C-PAP machine">
                Use a C-PAP machine
            </label><br />
            <label>
                <input type="checkbox" name="diseases" value="Thyroid Problems">
                Thyroid Problems
            </label><br />
            <label>
                <input type="checkbox" name="diseases" value="Tuberculosis">
                Tuberculosis
            </label><br />
            <label>
                <input type="checkbox" name="diseases" value="Venereal Disease">
                Venereal Disease
            </label><br />
            <label>
                <input type="checkbox" name="diseases" value="Neurological Disorders">
                Neurological Disorders
            </label><br />
            <label>
                <input type="checkbox" name="diseases" value="Bleeding Disorders">
                Bleeding Disorders
            </label><br />
            <label>
                <input type="checkbox" name="diseases" value="Lung Disease">
                Lung Disease
            </label><br />
            <label>
                <input type="checkbox" name="diseases" value="Strokes">
                Strokes
            </label><br />
            <label>
                <input type="checkbox" name="diseases" value="Polio">
                Polio
            </label><br />
            <label>
                <input type="checkbox" name="diseases" value="Blood Transfusion">
                Blood Transfusion
            </label><br />

            <br />

            <h2>Where is the pain/problem Located ?</h2>

            <label>
                <input type="text" placeholder="Location" name="location" value="">
            </label><br />

            <br />
            <br />
            <h2>Medicines You are Taking.</h2>
            <textarea id="" name="medicines" rows="1" cols="30">Enter Text Here...
            </textarea>

            <p>Healthy & Unhealthy Habits</p>
            <!-- Question 1 -->
            <h2>Exercise Routine</h2>
            <!-- Here are the choices for the first question. Each input tag must have the same name. For this question, the name is q1. -->
            <!-- The value is which answer the choice corresponds to. -->
            <label>
                <input type="radio" name="exercise" value="Never">

                Never
            </label><br />
            <label>
                <input type="radio" name="exercise" value="Weekly">
                Weekly
            </label><br />
            <label>
                <input type="radio" name="exercise" value="Several Times A Week">
                Several Times A Week
            </label><br />
            <label>
                <input type="radio" name="exercise" value="Daily">
                Daily
            </label><br />

            <!-- Question 2 -->
            <h2>Alcohol Consumption</h2>
            <!-- Here are the choices for the second question. Notice how each input tag has the same name (q2), but a different name than the previous question. -->
            <label>
                <input type="radio" name="alcohol" value="I don't drink">
                I don't drink
            </label><br />
            <label>
                <input type="radio" name="alcohol" value="1-2 glasses/day">
                1-2 glasses/day
            </label><br />
            <label>
                <input type="radio" name="alcohol" value="3-4 glasses/day">
                3-4 glasses/day
            </label><br />
            <label>
                <input type="radio" name="alcohol" value="5+ glasses/day">
                5+ glasses/day
            </label><br />

            <!-- Question 3 -->
            <h2>Do you smoke?</h2>
            <!-- Choices for the third question -->
            <label>
                <input type="radio" name="smoking" value="No">
                No
            </label><br />
            <label>
                <input type="radio" name="smoking" value="0-1 pack/day">
                0-1 pack/day
            </label><br />
            <label>
                <input type="radio" name="smoking" value="1-2 packs/day">
                1-2 packs/day
            </label><br />
            <label>
                <input type="radio" name="smoking" value="2+ packs/day">
                2+ packs/day
            </label><br />

            <!-- Question 4 -->
            <h2>Caffeine Consumption</h2>
            <!-- Choices for the fourth question -->
            <label>
                <input type="radio" name="caffeine" value="I don't use caffeine">
                I don't use caffeine
            </label><br />
            <label>
                <input type="radio" name="caffeine" value="1-2 cups/day">
                1-2 cups/day
            </label><br />
            <label>
                <input type="radio" name="caffeine" value="3-4 cups/day">
                3-4 cups/day
            </label><br />
            <label>
                <input type="radio" name="caffeine" value="5+ cups/day">
                5+ cups/day
            </label><br />

            <button type="submit" value="Submit" >Submit Form</button>
            <button type="reset" value="Reset" >Reset</button>
        </form>

    </div>
</body>
</html>