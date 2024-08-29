@extends('Layout.navbar')
@section('content')

<div class="bg-gray-100 text-gray-800">
    <!-- Header -->
   
  <section class="py-12 bg-cover bg-center relative p-3" style="background-image: url('{{ asset('images/data-privacy.jpg') }}');">
  
    
    <div class="absolute inset-0 bg-black bg-opacity-50"></div>
  
    <div class="container mx-auto px-4 relative z-10 text-white pt-8">
      <h2 class="text-4xl font-bold mb-4 text-center text-white pt-8">Data Privacy</h2>
        <h2 class="text-4xl font-bold mb-4">Introduction</h2>
        <p class="text-lg mb-6">
            The NDPR provides legal safeguards for the processing of personal data. Under the NDPR, Personal Data must be processed in accordance with a specific, legitimate, and lawful purpose consented to by the Data Subject.
        </p>
    </div>
</section>



    <!-- Definitions Section -->
  <div>
  
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-bold mb-4">Key Definitions</h2>
            <div class="space-y-6 text-gray-700">
                <div>
                    <h3 class="text-xl font-semibold">Personal Data</h3>
                    <p>The NDPA defines “Personal Data” as any information relating to an individual, who can be identified or is identifiable, directly or indirectly, in particular by reference to an identifier such as a name, an identification number, location data, an online identifier or one or more factors specific to the physical, physiological, genetic, psychological, cultural, social or economic identity of that individual.</p>
                </div>
                <div>
                    <h3 class="text-xl font-semibold">Processing</h3>
                    <p>The NDPA defines “Processing” as any operation or set of operations which is performed on Personal Data, whether or not by automated means, such as collection, recording, organisation, structuring, storage, adaptation or alteration, retrieval, consultation, use, disclosure by transmission, dissemination or otherwise making available, alignment or combination, restriction, erasure or destruction, and does not include the mere transit of data originating outside Nigeria.</p>
                </div>
                <div>
                    <h3 class="text-xl font-semibold">Controller</h3>
                    <p>According to the NDPA, a “Data Controller” is an individual, private entity, public Commission or agency or any other body who or which, alone or jointly with others, determines the purposes and means of the processing of personal data.</p>
                </div>
                <div>
                    <h3 class="text-xl font-semibold">Data Controller or Data Processor of Major Importance</h3>
                    <p>According to the NDPA, a “Data Controller or Data Processor of Major Importance” is a Data Controller or Data Processor that is domiciled, resident in, or operating in Nigeria and processes or intends to process personal data of more than such number of data subjects who are within Nigeria, as the NDPC may prescribe, or such other class of Data Controller or Data Processor that is processing Personal Data of particular value or significance to the economy, society or security of Nigeria as the NDPC may designate.</p>
                </div>
                <div>
                    <h3 class="text-xl font-semibold">Processor</h3>
                    <p>According to the NDPA, a “Data Processor”, is an individual, private entity, public authority, or any other body, who processes Personal Data on behalf of or at the direction of a Data Controller or another Data Processor.</p>
                </div>
                <div>
                    <h3 class="text-xl font-semibold">Data Subject</h3>
                    <p>The NDPA defines a “Data Subject” as an individual to whom personal data relates.</p>
                </div>
                <div>
                    <h3 class="text-xl font-semibold">Sensitive Personal Data</h3>
                    <p>Under the NDPA, “Sensitive Personal Data” means Personal Data relating to an individual’s:</p>
                    <ul class="list-disc pl-6">
                        <li>Genetic and biometric data for the purpose of uniquely identifying a natural person;</li>
                        <li>Race or ethnic origin;</li>
                        <li>Religious or similar beliefs, such as those reflecting conscience or philosophy;</li>
                        <li>Health status;</li>
                        <li>Sex life;</li>
                        <li>Political opinions and affiliations;</li>
                        <li>Trade union membership; or</li>
                        <li>Other information prescribed by the NDPC as Sensitive Personal Data.</li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl font-semibold">Data Breach</h3>
                    <p>According to the NDPA, a “Personal Data Breach” means a breach of security of a Data Controller or Data Processor leading to or likely to lead to the accidental or unlawful destruction, loss, alteration, unauthorized disclosure of, or access to, Personal Data transmitted, stored or otherwise processed.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Data Collection Section -->
    <section class="py-12">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-bold mb-4">The Data We Collect About You</h2>
            <p class="text-gray-700 mb-6">
                The Policy of UKF is to ensure that any personal data held by the business will be:
            </p>
            <ul class="list-disc pl-6 space-y-2 text-gray-700">
                <li>Processed lawfully, fairly, and in a transparent manner</li>
                <li>Collected for specified, explicit, and legitimate purposes</li>
                <li>Adequate, relevant, limited to what is necessary, accurate and kept up to date</li>
                <li>Retained for as long as necessary</li>
                <li>Processed in an appropriate manner to maintain security</li>
            </ul>
        </div>
    </section>

    <!-- Our Commitments Section -->
    <section class="py-12 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-bold mb-4">Our Commitments</h2>
            <ul class="list-disc pl-6 space-y-2 text-gray-700">
                <li>Not pass personal data to third parties other than our Business Service Providers</li>
                <li>Not forward fingerprint cards for clients</li>
                <li>Not retain a copy of the client’s fingerprint card</li>
                <li>Conduct regular checks on data security</li>
                <li>Delete data automatically after three calendar months or less unless the data is being held for repeat clients such as corporates and service providers</li>
                <li>Require our Data Protection Officer to carry out a regular data review to ensure compliance with GDPR</li>
            </ul>
        </div>
    </section>
  </div>
<div>

@endsection
