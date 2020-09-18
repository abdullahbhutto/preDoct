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
        

        <form id="quiz">

            <p>General Patient Information</p>
            <table>

                <h2>Gender</h2>

                <tr>

                    <td><input type="radio" name="q1" value="" />Male</td>
                    <td><input type="radio" name="q1" value="" />Female</td>
                </tr>


                <tr>
                    <td><input type="text" placeholder="First Name" name="fname" /></td>
                    <td><input type="text" placeholder="Last Name" name="lname" /></td>

                </tr>

                <tr>
                    <td><input type="text" placeholder="Patient Email" name="email" /></td>
                    <td><input type="text" placeholder="Contact No" name="contact" /></td>

                </tr>

                <tr>
                    <td><input type="text" placeholder="Age (Years)" name="age" /></td>
                    <td><input type="text" placeholder="Weight (kg)" name="weight" /></td>

                </tr>
            </table>


            <label>
                <input type="text" placeholder="Reason for seeing the Dr" name="" value="">
            </label><br />

            <br />



            <br />

            <h2>Who Reffered You To Us?</h2>

            <label>
                <input type="text" placeholder="Doctor/Hospital Name" name="" value="">
            </label><br />

            <br />


            <p>Patient Medical History</p>
            <!-- Question 1 -->
            <br />
            <h2>Please list any drug allergies.</h2>

            <textarea id="" name="" rows="5" cols="30">Enter Text Here...
            </textarea>



            <h2>
                Have you ever had (Please select all that apply).
            </h2>
            <!-- Here are the choices for the first question. Each input tag must have the same name. For this question, the name is q1. -->
            <!-- The value is which answer the choice corresponds to. -->
            <label>
                <input type="checkbox" name="q1" value="c1">

                Diabetes
            </label><br />
            <label>
                <input type="checkbox" name="q1" value="c2">
                Asthma
            </label><br />
            <label>
                <input type="checkbox" name="q1" value="c3">
                Heart Disease
            </label><br />
            <label>
                <input type="checkbox" name="q1" value="c4">
                Cancer
            </label><br />
            <label>
                <input type="checkbox" name="q1" value="c4">
                Anemia
            </label><br />
            <label>
                <input type="checkbox" name="q1" value="c4">
                Emotional Disorder
            </label><br />
            <label>
                <input type="checkbox" name="q1" value="c4">
                Gout
            </label><br />
            <label>
                <input type="checkbox" name="q1" value="c4">
                Epilepsy Seizures
            </label><br />
            <label>
                <input type="checkbox" name="q1" value="c4">
                Fainting Spells
            </label><br />
            <label>
                <input type="checkbox" name="q1" value="c4">
                Gallstones
            </label><br />
            <label>
                <input type="checkbox" name="q1" value="c4">
                Arthritis
            </label><br />
            <label>
                <input type="checkbox" name="q1" value="c4">
                Heart Attack
            </label><br />
            <label>
                <input type="checkbox" name="q1" value="c4">
                Rheumatic Fever
            </label><br />
            <label>
                <input type="checkbox" name="q1" value="c4">
                High Blood Pressure
            </label><br />
            <label>
                <input type="checkbox" name="q1" value="c4">
                Digestive Problems
            </label><br />
            <label>
                <input type="checkbox" name="q1" value="c4">
                Ulcer Disease
            </label><br />
            <label>
                <input type="checkbox" name="q1" value="c4">
                Hepatitis
            </label><br />
            <label>
                <input type="checkbox" name="q1" value="c4">
                Kidney Disease
            </label><br />
            <label>
                <input type="checkbox" name="q1" value="c4">
                Liver Disease
            </label><br />
            <label>
                <input type="checkbox" name="q1" value="c4">
                Use a C-PAP machine
            </label><br />
            <label>
                <input type="checkbox" name="q1" value="c4">
                Thyroid Problems
            </label><br />
            <label>
                <input type="checkbox" name="q1" value="c4">
                Tuberculosis
            </label><br />
            <label>
                <input type="checkbox" name="q1" value="c4">
                Venereal Disease
            </label><br />
            <label>
                <input type="checkbox" name="q1" value="c4">
                Neurological Disorders
            </label><br />
            <label>
                <input type="checkbox" name="q1" value="c4">
                Bleeding Disorders
            </label><br />
            <label>
                <input type="checkbox" name="q1" value="c4">
                Lung Disease
            </label><br />
            <label>
                <input type="checkbox" name="q1" value="c4">
                Strokes
            </label><br />
            <label>
                <input type="checkbox" name="q1" value="c4">
                Polio
            </label><br />
            <label>
                <input type="checkbox" name="q1" value="c4">
                Blood Transfusion
            </label><br />

            <br />

            <h2>Where is the pain/problem Located ?</h2>

            <label>
                <input type="text" placeholder="Location" name="" value="">
            </label><br />

            <br />
            <br />
            <h2>Medicines You are Taking.</h2>
            <textarea id="" name="" rows="1" cols="30">Enter Text Here...
            </textarea>

            <p>Healthy & Unhealthy Habits</p>
            <!-- Question 1 -->
            <h2>Exercise Routine</h2>
            <!-- Here are the choices for the first question. Each input tag must have the same name. For this question, the name is q1. -->
            <!-- The value is which answer the choice corresponds to. -->
            <label>
                <input type="radio" name="q1" value="c1">

                Never
            </label><br />
            <label>
                <input type="radio" name="q1" value="c2">
                Weekly
            </label><br />
            <label>
                <input type="radio" name="q1" value="c3">
                Several Times A Week
            </label><br />
            <label>
                <input type="radio" name="q1" value="c4">
                Daily
            </label><br />

            <!-- Question 2 -->
            <h2>Alcohol Consumption</h2>
            <!-- Here are the choices for the second question. Notice how each input tag has the same name (q2), but a different name than the previous question. -->
            <label>
                <input type="radio" name="q2" value="c1">
                I don't drink
            </label><br />
            <label>
                <input type="radio" name="q2" value="c2">
                1-2 glasses/day
            </label><br />
            <label>
                <input type="radio" name="q2" value="c3">
                3-4 glasses/day
            </label><br />
            <label>
                <input type="radio" name="q2" value="c4">
                5+ glasses/day
            </label><br />

            <!-- Question 3 -->
            <h2>Do you smoke?</h2>
            <!-- Choices for the third question -->
            <label>
                <input type="radio" name="q3" value="c1">
                No
            </label><br />
            <label>
                <input type="radio" name="q3" value="c2">
                0-1 pack/day
            </label><br />
            <label>
                <input type="radio" name="q3" value="c3">
                1-2 packs/day
            </label><br />
            <label>
                <input type="radio" name="q3" value="c4">
                2+ packs/day
            </label><br />

            <!-- Question 4 -->
            <h2>Caffeine Consumption</h2>
            <!-- Choices for the fourth question -->
            <label>
                <input type="radio" name="q4" value="c1">
                I don't use caffeine
            </label><br />
            <label>
                <input type="radio" name="q4" value="c2">
                1-2 cups/day
            </label><br />
            <label>
                <input type="radio" name="q4" value="c3">
                3-4 cups/day
            </label><br />
            <label>
                <input type="radio" name="q4" value="c4">
                5+ cups/day
            </label><br />

            <button type="submit" id="submit" onclick="tabulateAnswers()">Submit Form</button>
            <button type="reset" id="reset" onclick="resetAnswer()">Reset</button>
        </form>

    </div>
</body>
</html>