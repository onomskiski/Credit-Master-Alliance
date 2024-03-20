@extends('layouts.en')
	@section('content')	

	<div class="w-full">
		<div class="w-full px-4 lg:w-[60%] mx-auto">
			<div class="w-full lg:w-[2/3] mx-auto flex flex-col lg:flex-row flex-wrap">
				<div class="w-full lg:w-3/4">
					<div class="py-3 md:px-5 px-3">
						<div>
							<h1 class="font-[450] text-2xl lg:text-3xl text-gray-700">
								Negative Items: What are negative items and how to remove them.
							</h1>
							<address class="not-italic text-sm">
								MARCH 16, 2022 
							</address>
						</div>
		
						<div class="flex flex-col space-y-2">
							<img class="w-full py-3" src="/resources/about-us/images/derogatory-credit-featured-hero.webp" alt="Disclosure regarding our editorial content standards.">
							<cite class="text-sm underline italic">
								Disclosure regarding our editorial content standards.
							</cite>
						</div>
		
						<div class="flex flex-col space-y-5 mt-5 text-left">
							<p>
							Negative items, also referred to as adverse credit entries, signify the negative and often severe aspects of your credit report, such as late payments and delinquencies. These items, along with a low credit rating, can hinder your ability to be approved for credit or secure favorable credit terms.
							</p>
		
							<p>
							Understanding the various types of negative items is crucial because they can significantly affect your financial history and your standing with lenders. Here's what you should know about negative items and their impact on your credit.
							</p>
		
							<h2>
								What are negative items
							</h2>
							<p>
								Negative items on a credit report are entries that reflect poorly on a person's credit history, indicating to lenders and creditors that the individual may have had difficulties managing credit or debt in the past. These items can substantially lower a credit score and affect one's ability to obtain new credit, loans, or favorable interest rates.
							</p>
		
							<p>
								Some derogatory marks are more severe than others. For example, a <u>late payment</u> generally won’t affect your credit as much as a <u>bankruptcy</u>.
							</p>
		
							<h3>
								What are the types of negative items?
							</h3>
							<p>
								The types of negative items that can appear on a credit report and negatively impact an individual's credit score include:
							</p>
							<b class="font-black">Late Payments</b> Payments reported as 30, 60, 90, or more days late. The impact on your credit score can vary based on how late the payment was, the frequency of late payments, and how recently they occurred.
                    		</p>
							
							</p>
							<b class="font-black">Collections</b> Accounts that have been turned over to a collection agency due to non-payment. Having an account in collections indicates a failure to pay back a debt as agreed.
							</p>

							</p>
							<b class="font-black">Charge-Offs</b> When a creditor decides that a debt is unlikely to be collected after a prolonged period of non-payment, the account is marked as "charged off." This does not absolve the debtor of the obligation; it's a bookkeeping action that signifies a serious delinquency.
                    		</p>

							</p>
							<b class="font-black">Bankruptcies</b> This legal proceeding involves a person or business unable to repay their outstanding debts. The filing will remain on your credit report for 7 to 10 years, depending on the type of bankruptcy filed.
                    		</p>

							</p>
							<b class="font-black">Foreclosures</b> This occurs when a homeowner fails to make mortgage payments, and the lender takes possession of the property. A foreclosure remains on a credit report for 7 years and indicates a significant default on a loan obligation.
                    		</p>

							</p>
							<b class="font-black">Repossessions</b> If a borrower defaults on a loan with physical collateral (like a car loan), the lender may repossess the property. This is a clear indicator of default on a loan agreement.
                    		</p>

							</p>
							<b class="font-black">Judgments</b> If a creditor sues you over an unpaid debt and wins a judgment against you, this can be recorded on your credit report. Though the criteria for reporting judgments can vary, they signify a court has legally determined you owe a debt.
							</p>

							</p>
							<b class="font-black">Tax Liens</b> Previously, unpaid tax liens could appear on your credit report, indicating you had not paid your taxes. Recent changes to credit reporting laws have largely removed tax liens from credit reports, but they can still significantly impact your financial standing.
							</p>

							<p>
							Each type of negative item can severely affect your credit score and your ability to borrow money or secure favorable credit terms in the future. The impact of these items diminishes over time, particularly if you take steps to improve your credit by paying bills on time, reducing debt, and maintaining a good credit utilization ratio.
							</p>
						</div>
					</div>

					<div class="mt-5 border-t-2 border-t-gray-300 py-5 px-3">
						<div class="flex flex-col md:flex-row justify-center">
							<div class="w-full mx-auto lg:justify-end justify-center flex">
								<img src="/resources/about-us/images/10-money-tips-using-credit-cards-wisely-featured.webp" alt="" class="rounded-full lg:mx-2 mx-auto h-[80pt] md:h-[80pt] w-[80pt] md:w-[80pt]">
							</div>
		
							<div class="px-5 py-2 flex flex-col space-y-0 text-[10pt]">
								<p class="text-sky-600">Lynn Corey</p>
								<address class="uppercase">
									Credit Consultant at Credit Masters Alliance
								</address>
		
								<p class="pr-4 pt-2 leading-loose">
								Lynn Corey, transitioning from general credit inquiries to resolving overdue balances, has become a vital CXRF Team member. Her emphasis on handling escalated situations has greatly enhanced the member experience in the past year.
								</p>
								
							</div>
						</div>
					</div>
				</div>
	
				<div class="w-full lg:w-1/4">
					<div class="w-full pt-10">
						<h3 class="uppercase text-lg lg:text-xl font-[450] text-gray-700">Related Articles</h3>
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
							<div class="bg-green-600 w-full flex flex-col space-y-8 py-8 px-4 pb-10">
								<p class="text-sm font-[450] text-center text-gray-50">
									Let us help you check on your credit score, today.
								</p>

								<div class="w-full flex justify-center items-center">
								<button class="font-bold text-[10pt] px-5 py-3 mx-auto text-gray-50 bg-red-500">
    								Get Started
								</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</section>
@endsection	

