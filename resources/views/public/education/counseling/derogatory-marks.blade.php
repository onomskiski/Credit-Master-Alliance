<x-public-layout>

	<div class="w-full">
		<div class="w-full px-4 lg:w-[60%] mx-auto">
			<div class="w-full lg:w-[2/3] mx-auto flex flex-col lg:flex-row flex-wrap">
				<div class="w-full lg:w-3/4">
					<div class="py-3 md:px-5 px-3">
						<div>
							<h1 class="font-[450] text-2xl lg:text-3xl text-gray-700">
								Derogatory marks: what are they and how to remove them
							</h1>
							<address class="not-italic text-sm">
								MARCH 16, 2022 | BY <span class="text-sky-600 hover:underline transition">MELISSA COLLINS</span>
							</address>
						</div>
		
						<div class="flex flex-col space-y-2">
							<img class="w-full py-3" src="/resources/about-us/images/derogatory-credit-featured-hero.webp" alt="Disclosure regarding our editorial content standards.">
							<cite class="text-sm underline italic">
								Disclosure regarding our editorial content standards.
							</cite>
						</div>
		
						<div class="flex flex-col space-y-5 mt-5 text-justify">
							<p>
								Derogatory marks, also known as derogatory credit items, represent negative and sometimes serious aspects of your credit report, including late payments and delinquencies. These marks, coupled with a low credit rating, can make it difficult to get approved for credit or get decent credit terms.
							</p>
		
							<p>
								It’s important to know about the different kinds of derogatory marks as they can have a heavy impact on your financial history and your ability to be in good standing with your lenders. Here’s what you need to know about derogatory marks and how they can affect your credit.
							</p>
		
							<h2>
								What are derogatory marks
							</h2>
							<p>
								Derogatory marks are negative items that indicate you failed to pay a loan or are delinquent on a loan or other debt. They will show up on your credit report and hurt your credit over time. Having a derogatory mark on your credit report is a serious matter, as they show up as a warning to lenders, limiting credit approvals and hurting your credit.
							</p>
		
							<p>
								Some derogatory marks are more severe than others. For example, a <u>late payment</u> generally won’t affect your credit as much as a <u>bankruptcy</u>.
							</p>
		
							<h3>
								What are the types of derogatory marks?
							</h3>
							
							<p>
								There are different types of derogatory marks, and each will typically stay on your credit report for seven years. How you acquire these marks depends on the situation. Take a look at the chart below to see how long each mark stays on your credit report.
							</p>
		
							<h3>
								Derogatory marks by level of severity
							</h3>
							<p>
								Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et earum praesentium possimus, reiciendis necessitatibus ut assumenda quisquam hic quia, alias commodi recusandae, molestias cupiditate obcaecati consequuntur eligendi! Atque, quasi autem?
							</p>
						</div>
					</div>

					<div class="mt-5 border-t-2 border-t-gray-300 py-5 px-3">
						<div class="flex flex-col md:flex-row justify-center">
							<div class="w-full mx-auto justify-end flex">
								<img src="https://thispersondoesnotexist.com/" alt="" class="rounded-full mx-2 h-[80pt] md:h-[80pt] w-[80pt] md:w-[80pt]">
							</div>
		
							<div class="px-5 py-2 flex flex-col space-y-0 text-[10pt]">
								<p class="text-sky-600">Founder's Name</p>
								<address class="uppercase">
									Credit Consultant at Credit Masters Alliance
								</address>
		
								<p class="pr-4 pt-2 leading-loose">
									in member services assisting members with general credit questions,  quickly moved to a position helping members with overdue balances. For the past year Melissa has been a part of the CXRF Team resolving escalated situations and creating a better member experience....
								</p>
								<div class="pt-3 text-[10pt]">
									<a href="#" class="mt-4 text-sky-500 underline">Read More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
	
				<div class="w-full lg:w-1/4">
					<div class="w-full">
						<h3 class="uppercase text-xl lg:text-2xl font-[450] text-gray-700">Related Articles</h3>
						<?php
							$eachArticles = [
								[
									'title' => "How To Purchase Online",
									'image' => '/resources/about-us/images/how-to-purchase-safely-featured.webp',
									'link' => '#'
								],
								[
									'title' => "10 Money Tips Using Credit Cards Wisely"	,
									'image' => "/resources/about-us/images/10-money-tips-using-credit-cards-wisely-featured.webp",
									'link' => '#'
								],
								[
									'title' => "Home Loan Tips For First-Time Home Buyers",
									'image' => "/resources/about-us/images/home-equity-loans-featured.webp",
									'link' => '#'
								]
							];
						?>
						@foreach ($eachArticles as $article)
							{{-- @livewire('each-related-article', ['title' => $article['title'], 'image' => $article['image']]) --}}

							<a href="<?php echo $article['link']; ?>" class="hover:no-underline text-gray-600 hover:text-gray-600">
								<div class="flex flex-col space-y-3 my-3">
									<img class="w-full h-auto" src="<?php echo $article['image']; ?>" alt="<?php echo $article['title']; ?>">
								
									<cite class="text-sm hover:text-sky-400">
										<?php echo $article['title']; ?>
									</cite>
								</div>
							</a>
						@endforeach

						<div class="w-full py-3">
							<div class="bg-core w-full flex flex-col space-y-8 py-8 px-4 pb-10">
								<p class="text-sm font-[450] text-center text-gray-50">
									Let us help you check on your credit score, today.
								</p>

								<div class="w-full flex justify-center items-center">
									<button class="font-bold text-[10pt] px-5 py-3 mx-auto text-gray-50 bg-gradient-to-tr from-greenish to-blueish/40 bg-left-top rounded-lg">
										Learn More
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</x-public-layout>