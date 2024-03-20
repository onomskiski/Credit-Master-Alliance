@extends('layouts.en')
	@section('content')	

	<div class="w-full">
		<div class="w-full px-4 lg:w-[60%] mx-auto">
			<div class="w-full lg:w-[2/3] mx-auto flex flex-col lg:flex-row flex-wrap">
				<div class="w-full lg:w-3/4">
					<div class="py-3 md:px-5 px-3">
						<div>
							<h1 class="font-[450] text-2xl lg:text-3xl text-gray-700">
							How to remove collections from your credit report.
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
							<h2>What are Collections?
							</h2>	
							<p>
							Collections occur when unpaid debts are passed to third-party agencies for recovery, leading to attempts to contact debtors for repayment. They stem from various debts like credit cards and medical bills, impacting credit scores significantly. The process starts after a period of non-payment, often around 180 days. Debtors have rights under consumer protection laws such as the Fair Debt Collection Practices Act (FDCPA). Resolving collections involves negotiating payment plans or seeking help from credit counseling services. Prompt action is vital to minimize negative credit impacts. Professional advice can aid debtors in navigating collections effectively.							
							</p>
							<p>
								As per the Consumer Financial Protection Bureau, over a quarter of consumers in 2018 faced debt in collections, emphasizing the urgency of resolving such situations. Regardless of responsibility, all collections negatively affect credit.							
							</p>
							<p>
								The approach to removing negative items hinges on their accuracy. For inaccuracies, dispute them; for legitimate ones, negotiation with agencies is an option. When debts enter collections—usually after 180 days of delinquency—they're pursued by collection agencies after creditors give up recovery attempts, often termed as a charge-off.
							</p>
							<p>
								Once your account falls into the hands of a debt collector, they employ various methods to recover the owed money, often bombarding you with communications via phone, letters, emails, or text messages. Consequently, the term "debt collector" often evokes stress and anxiety for many Americans.
							</p>
		
							<p>
								Collections can significantly damage your credit and serve as a red flag to creditors, potentially impacting your ability to obtain credit. They remain on your credit report for seven years, although their exact impact depends on various factors, including recency.
							</p>
							<p>
								However, there's good news: Understanding your rights and available resources empowers you to take control of your credit. With regulations governing debt collector communications and accessible resources, you can navigate this challenging situation effectively. Let's explore what steps to take next.
							</p>
							<b class="font-black">Review Your Credit Report</b> Obtain a copy of your credit report from all three major credit bureaus (Equifax, Experian, and TransUnion) to identify the collection account.
                    		</p>
							
							</p>
							<b class="font-black">Validate the Debt</b> Request validation of the debt from the collection agency. They must provide proof that you owe the debt and that they have the legal right to collect it.
							</p>

							</p>
							<b class="font-black">Negotiate a Pay-for-Delete Agreement</b> If the debt is valid, negotiate with the collection agency to pay the debt in exchange for the removal of the collection from your credit report. This is known as a "pay-for-delete" agreement. Get the agreement in writing before making any payments.
                    		</p>

							</p>
							<b class="font-black">Dispute Inaccurate Information</b> If you believe the collection account is inaccurate or doesn't belong to you, dispute it with the credit bureaus. They are required to investigate and remove any information that cannot be verified.
                    		</p>

							</p>
							<b class="font-black">Wait for the Statute of Limitations to Expire</b> In some cases, you may choose to wait for the statute of limitations (the time limit for creditors to sue you for the debt) to expire. Once the statute of limitations has passed, the collection agency cannot legally pursue the debt, and it should fall off your credit report.
                    		</p>

							</p>
							<b class="font-black">Seek Legal Assistance</b>  If you encounter difficulties in resolving the collection account, consider seeking legal assistance from a consumer rights attorney or credit repair company.
                    		</p>
							<p>
								Remember to monitor your credit report regularly to ensure that the collection account has been removed as agreed or that any disputes have been resolved satisfactorily. Additionally, focus on building positive credit habits to improve your credit score over time.
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
									in member services assisting members with general credit questions,  quickly moved to a position helping members with overdue balances. For the past year Melissa has been a part of the CXRF Team resolving escalated situations and creating a better member experience....
								</p>
								
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

