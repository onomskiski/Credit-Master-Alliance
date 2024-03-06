<x-public-layout>

	<div class="w-full">
		<div class="w-full lg:w-[2/3] mx-auto flex flex-col lg:flex-row flex-wrap">
			<div class="w-full lg:w-3/4 py-3 md:px-5 px-3">
				<div>
					<h1>
						Derogatory marks: what are they and how to remove them
					</h1>
					<address class="not-italic text-sm">
						MARCH 16, 2022 | BY <span class="text-sky-600 hover:underline transition">MELISSA COLLINS</span>
					</address>
				</div>

				<div class="flex flex-col space-y-2">
					<img class="w-full py-3" src="https://www.creditrepair.com/content/dam/credit-repair/assets/images/seo-articles/derogatory-marks/derogatory-credit-featured-hero.jpg" alt="Disclosure regarding our editorial content standards.">
					<cite class="text-sm underline italic">
						Disclosure regarding our editorial content standards.
					</cite>
				</div>

				<div>
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

			<div class="w-full lg:w-1/3">
				<div class="w-full">
					<h3 class="uppercase">Related Articles</h3>
					<?php
						$eachArticles = [
							[
								'title' => "How To Purchase Online",
								'image' => 'https://www.creditrepair.com/content/dam/credit-repair/assets/images/seo-articles/how-to-purchase-safely-online/how-to-purchase-safely-featured.jpg'
							]
						]
					?>
					@foreach (eachArticles as $article)
						@livewire('each-related-article', ['title' => $article -> title, 'image' => $article -> image])
					@endforeach
				</div>
			</div>
		</div>
	</div>

</x-public-layout>