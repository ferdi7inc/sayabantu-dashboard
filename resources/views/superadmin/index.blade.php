<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   Job Dashboard
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&amp;display=swap" rel="stylesheet"/>
  <style>
   body {
            font-family: 'Roboto', sans-serif;
        }
  </style>
 </head>
 <body class="bg-gray-100">
  <div class="min-h-screen flex flex-col">
   <!-- Navbar -->
   <nav class="bg-white shadow-md">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
     <a class="text-xl font-bold text-gray-800" href="#">
      Job Dashboard
     </a>
     <div class="flex space-x-4">
      <a class="text-gray-600 hover:text-gray-800" href="#">
       Home
      </a>
      <a class="text-gray-600 hover:text-gray-800" href="#">
       Jobs
      </a>
      <a class="text-gray-600 hover:text-gray-800" href="#">
       About
      </a>
      <a class="text-gray-600 hover:text-gray-800" href="#">
       Contact
      </a>
     </div>
    </div>
   </nav>
   <!-- Main Content -->
   <main class="flex-grow container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">
     Available Job Listings
    </h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
     <!-- Job Card -->
     <div class="bg-white p-6 rounded-lg shadow-md">
      <div class="flex items-center mb-4">
       <img alt="Company logo placeholder" class="w-12 h-12 rounded-full mr-4" height="50" src="https://storage.googleapis.com/a1aa/image/JBlKRN1UszrxDxF2SmflSUn65OlG73Ffdzj4Rf1Xci9XfOWPB.jpg" width="50"/>
       <div>
        <h2 class="text-xl font-bold text-gray-800">
         Software Engineer
        </h2>
        <p class="text-gray-600">
         Tech Company
        </p>
       </div>
      </div>
      <p class="text-gray-700 mb-4">
       We are looking for a skilled software engineer to join our team. You will be responsible for developing high-quality applications.
      </p>
      <div class="flex justify-between items-center">
       <span class="text-gray-600">
        <i class="fas fa-map-marker-alt">
        </i>
        New York, NY
       </span>
       <a class="text-blue-600 hover:underline" href="#">
        Apply Now
       </a>
      </div>
     </div>
     <!-- Repeat Job Card for each job listing -->
     <div class="bg-white p-6 rounded-lg shadow-md">
      <div class="flex items-center mb-4">
       <img alt="Company logo placeholder" class="w-12 h-12 rounded-full mr-4" height="50" src="https://storage.googleapis.com/a1aa/image/JBlKRN1UszrxDxF2SmflSUn65OlG73Ffdzj4Rf1Xci9XfOWPB.jpg" width="50"/>
       <div>
        <h2 class="text-xl font-bold text-gray-800">
         Product Manager
        </h2>
        <p class="text-gray-600">
         Innovative Solutions
        </p>
       </div>
      </div>
      <p class="text-gray-700 mb-4">
       Seeking a product manager to oversee product development from inception to launch. Must have strong leadership skills.
      </p>
      <div class="flex justify-between items-center">
       <span class="text-gray-600">
        <i class="fas fa-map-marker-alt">
        </i>
        San Francisco, CA
       </span>
       <a class="text-blue-600 hover:underline" href="#">
        Apply Now
       </a>
      </div>
     </div>
     <div class="bg-white p-6 rounded-lg shadow-md">
      <div class="flex items-center mb-4">
       <img alt="Company logo placeholder" class="w-12 h-12 rounded-full mr-4" height="50" src="https://storage.googleapis.com/a1aa/image/JBlKRN1UszrxDxF2SmflSUn65OlG73Ffdzj4Rf1Xci9XfOWPB.jpg" width="50"/>
       <div>
        <h2 class="text-xl font-bold text-gray-800">
         Data Scientist
        </h2>
        <p class="text-gray-600">
         Data Corp
        </p>
       </div>
      </div>
      <p class="text-gray-700 mb-4">
       Looking for a data scientist to analyze large datasets and provide actionable insights. Proficiency in Python and R required.
      </p>
      <div class="flex justify-between items-center">
       <span class="text-gray-600">
        <i class="fas fa-map-marker-alt">
        </i>
        Boston, MA
       </span>
       <a class="text-blue-600 hover:underline" href="#">
        Apply Now
       </a>
      </div>
     </div>
     <div class="bg-white p-6 rounded-lg shadow-md">
      <div class="flex items-center mb-4">
       <img alt="Company logo placeholder" class="w-12 h-12 rounded-full mr-4" height="50" src="https://storage.googleapis.com/a1aa/image/JBlKRN1UszrxDxF2SmflSUn65OlG73Ffdzj4Rf1Xci9XfOWPB.jpg" width="50"/>
       <div>
        <h2 class="text-xl font-bold text-gray-800">
         UX/UI Designer
        </h2>
        <p class="text-gray-600">
         Creative Studio
        </p>
       </div>
      </div>
      <p class="text-gray-700 mb-4">
       We need a UX/UI designer to create user-friendly interfaces for our web and mobile applications. Experience with Figma and Sketch is a plus.
      </p>
      <div class="flex justify-between items-center">
       <span class="text-gray-600">
        <i class="fas fa-map-marker-alt">
        </i>
        Austin, TX
       </span>
       <a class="text-blue-600 hover:underline" href="#">
        Apply Now
       </a>
      </div>
     </div>
     <div class="bg-white p-6 rounded-lg shadow-md">
      <div class="flex items-center mb-4">
       <img alt="Company logo placeholder" class="w-12 h-12 rounded-full mr-4" height="50" src="https://storage.googleapis.com/a1aa/image/JBlKRN1UszrxDxF2SmflSUn65OlG73Ffdzj4Rf1Xci9XfOWPB.jpg" width="50"/>
       <div>
        <h2 class="text-xl font-bold text-gray-800">
         Marketing Specialist
        </h2>
        <p class="text-gray-600">
         Marketing Experts
        </p>
       </div>
      </div>
      <p class="text-gray-700 mb-4">
       Join our team as a marketing specialist to develop and execute marketing strategies. Must have experience with digital marketing tools.
      </p>
      <div class="flex justify-between items-center">
       <span class="text-gray-600">
        <i class="fas fa-map-marker-alt">
        </i>
        Chicago, IL
       </span>
       <a class="text-blue-600 hover:underline" href="#">
        Apply Now
       </a>
      </div>
     </div>
     <div class="bg-white p-6 rounded-lg shadow-md">
      <div class="flex items-center mb-4">
       <img alt="Company logo placeholder" class="w-12 h-12 rounded-full mr-4" height="50" src="https://storage.googleapis.com/a1aa/image/JBlKRN1UszrxDxF2SmflSUn65OlG73Ffdzj4Rf1Xci9XfOWPB.jpg" width="50"/>
       <div>
        <h2 class="text-xl font-bold text-gray-800">
         HR Manager
        </h2>
        <p class="text-gray-600">
         HR Solutions
        </p>
       </div>
      </div>
      <p class="text-gray-700 mb-4">
       We are hiring an HR manager to oversee our HR department and ensure compliance with labor laws. Strong interpersonal skills required.
      </p>
      <div class="flex justify-between items-center">
       <span class="text-gray-600">
        <i class="fas fa-map-marker-alt">
        </i>
        Seattle, WA
       </span>
       <a class="text-blue-600 hover:underline" href="#">
        Apply Now
       </a>
      </div>
     </div>
     <div class="bg-white p-6 rounded-lg shadow-md">
      <div class="flex items-center mb-4">
       <img alt="Company logo placeholder" class="w-12 h-12 rounded-full mr-4" height="50" src="https://storage.googleapis.com/a1aa/image/JBlKRN1UszrxDxF2SmflSUn65OlG73Ffdzj4Rf1Xci9XfOWPB.jpg" width="50"/>
       <div>
        <h2 class="text-xl font-bold text-gray-800">
         Sales Executive
        </h2>
        <p class="text-gray-600">
         Sales Corp
        </p>
       </div>
      </div>
      <p class="text-gray-700 mb-4">
       Looking for a sales executive to drive sales and build relationships with clients. Must have excellent communication skills.
      </p>
      <div class="flex justify-between items-center">
       <span class="text-gray-600">
        <i class="fas fa-map-marker-alt">
        </i>
        Miami, FL
       </span>
       <a class="text-blue-600 hover:underline" href="#">
        Apply Now
       </a>
      </div>
     </div>
     <div class="bg-white p-6 rounded-lg shadow-md">
      <div class="flex items-center mb-4">
       <img alt="Company logo placeholder" class="w-12 h-12 rounded-full mr-4" height="50" src="https://storage.googleapis.com/a1aa/image/JBlKRN1UszrxDxF2SmflSUn65OlG73Ffdzj4Rf1Xci9XfOWPB.jpg" width="50"/>
       <div>
        <h2 class="text-xl font-bold text-gray-800">
         Financial Analyst
        </h2>
        <p class="text-gray-600">
         Finance Inc.
        </p>
       </div>
      </div>
      <p class="text-gray-700 mb-4">
       Seeking a financial analyst to provide insights on financial performance and market trends. Proficiency in Excel and financial modeling required.
      </p>
      <div class="flex justify-between items-center">
       <span class="text-gray-600">
        <i class="fas fa-map-marker-alt">
        </i>
        Denver, CO
       </span>
       <a class="text-blue-600 hover:underline" href="#">
        Apply Now
       </a>
      </div>
     </div>
     <div class="bg-white p-6 rounded-lg shadow-md">
      <div class="flex items-center mb-4">
       <img alt="Company logo placeholder" class="w-12 h-12 rounded-full mr-4" height="50" src="https://storage.googleapis.com/a1aa/image/JBlKRN1UszrxDxF2SmflSUn65OlG73Ffdzj4Rf1Xci9XfOWPB.jpg" width="50"/>
       <div>
        <h2 class="text-xl font-bold text-gray-800">
         Customer Support
        </h2>
        <p class="text-gray-600">
         Support Hub
        </p>
       </div>
      </div>
      <p class="text-gray-700 mb-4">
       We need a customer support representative to assist our clients with their inquiries and issues. Excellent problem-solving skills required.
      </p>
      <div class="flex justify-between items-center">
       <span class="text-gray-600">
        <i class="fas fa-map-marker-alt">
        </i>
        Atlanta, GA
       </span>
       <a class="text-blue-600 hover:underline" href="#">
        Apply Now
       </a>
      </div>
     </div>
    </div>
   </main>
   <!-- Footer -->
   <footer class="bg-white shadow-md">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
     <p class="text-gray-600">
      © 2023 Job Dashboard. All rights reserved.
     </p>
     <div class="flex space-x-4">
      <a class="text-gray-600 hover:text-gray-800" href="#">
       <i class="fab fa-facebook-f">
       </i>
      </a>
      <a class="text-gray-600 hover:text-gray-800" href="#">
       <i class="fab fa-twitter">
       </i>
      </a>
      <a class="text-gray-600 hover:text-gray-800" href="#">
       <i class="fab fa-linkedin-in">
       </i>
      </a>
     </div>
    </div>
   </footer>
  </div>
 </body>
</html>
