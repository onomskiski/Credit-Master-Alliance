<x-app-layout>

    <script>
        const copyRefLink = () => {
            try{
                const refLink = $('.ref-link').val()

                if(navigator.clipboard.writeText(refLink)){
                    alert("referral link copied to clipboard")
                }
                else{
                    alert("Could not copy your referral link")
                }
            }
            catch(e){
                console.error(e)
            }
        }

        $('document').ready(() => {
            $('.referrals').html(`
            
                <tr class="no-data w-full px-5 py-5 grid">
                    <div colspan="2" class="mx-auto w-auto py-5">
                        No data available in table
                    </div>
                </tr>
            
            `)
            
            $.get('/api/referrals', res => {
                console.log(res)

                $('.referrals').html('')

                res.response.map(user => {
                    $('.referrals').append(`
                        <tr class="text-left">
                            <td>
                                ${user.username}
                            </td>

                            <td>
                                ${user.country}
                            </td>

                            <td>
                                $100
                            </td>

                            <td>
                                ${user.created_at}
                            </td>
                        </tr>
                    `)
                })
                
            })
        })

        // $('document').ready(() => console.log("jQuery reading"))
    </script>
    
    <div class="py-6 md:px-5 w-full">
        <div class="w-full pb-6">
            <h3 class="text-[15pt] md:text-[20pt] text-gray-600">
                Refer users to the {{ env('APP_NAME') }} community
            </h3>
        </div>

        <div class="w-full pt-10 bg-gray-50 shadow-lg flex justify-center items-center flex-col py-6 px-4 rounded-2xl">
            <div class="w-full grid mx-auto">
                <div class="mx-auto w-full flex flex-col justify-center items-center space-y-1 pb-[40pt]">
                    <p class="text-sm text-gray-700">
                        You can refer users by sharing your referral link:
                    </p>
                    <div class="w-full px-[20pt] mx-auto flex justify-center space-x-3">
                        <input 
                            type="text" 
                            disabled 
                            class="ref-link bg-btn-300 border-2 border-btn-100 shadow-md rounded-lg w-full md:w-3/4 text-btntext-300 text-sm py-4 px-6" 
                            value="{{ request() -> getSchemeAndHttpHost() .'/register?ref='. auth() -> user() -> username }}" 
                        />
                        <button onclick="copyRefLink()" class="copy-ref-link cursor-pointer px-5 bg-btn-100 hover:bg-btn-300 transition-colors text-btntext-100 hover:text-btntext-300 border-btn-100 border-2 rounded-lg flex justify-center items-center">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-copy" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M4 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V2Zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H6ZM2 5a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1h1v1a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h1v1H2Z"/>
                                </svg>
                            </div>
                        </button>
                    </div>
                    <p class="text-sm text-gray-700 font-bold pt-4">
                        Or your referral ID
                    </p>
                    <p class="font-bold text-lg text-primary-200 lowercase">
                        {{ auth() -> user() -> name}}
                    </p>
                    
                    <div>
                        <p class="text-xs py-2">
                            You were referred by
                        </p>
                        <div class="flex flex-col justify-center items-center text-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" heigt="45" width="45" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                            </svg>
                            <div class="text-xs">
                                {{ auth() -> user() -> referred_by }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-2xl text-left w-full pt-5 pb-2">
                <h3 class="text-gray-800">
                    Your Referrals
                </h3>
            </div>
            
            <div class="w-full flex justify-between items-center md:space-x-3 space-y-3 md:space-y-0 flex-wrap">
                <select name="offset" id="offset" class="rounded-lg border-1 border-gray-300 shadow-lg">
                    <option>10</option>
                    <option>25</option>
                    <option>50</option>
                    <option>100</option>
                </select>
                
                <input type="text" class="text-md rounded-lg border-1 border-gray-300 shadow-lg w-auto" />
            </div>
            <table class="w-full mt-10 table table-auto overflow-x-auto">
                <thead class="w-full text-sm text-gray-500">
                    <tr class="text-left">
                        <th>
                            Username
                        </th>

                        <th>
                            Country
                        </th>

                        <th>
                            Bonus Paid
                        </th>

                        <th>
                            Date Created
                        </th>
                    </tr>
                </thead>

                <tbody class="referrals text-gray-700">

                    
                </tbody>
            </table>

            <div class="w-full flex flex-col md:flex-row flex-wrap justify-between items-center text-sm px-[20pt] text-gray-700">
                <div>
                    Showing <span class="offset-from">0</span> to <span class="offset-to">0</span> of <span class="offset-total">0</span> entries
                </div>

                <div class="flex items-center space-x-3">
                    <button class="bg-gray-100 text-gray-600 px-4 py-2 rounded-2xl shadow-inner hover:shadow-lg transition-all">
                        Previous
                    </button>

                    <button class="bg-gray-100 text-gray-600 px-4 py-2 rounded-2xl shadow-inner hover:shadow-lg transition-all">
                        Next
                    </button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>