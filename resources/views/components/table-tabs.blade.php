<!-- component -->
<div class='flex items-center justify-center mt-10'>
<ul class="mx-auto grid max-w-full w-full grid-cols-3 gap-x-5 px-8">
  <li class="">
    <input class="peer sr-only" type="radio" value="yes" name="answer" id="yes" checked />
    <label class="flex justify-center cursor-pointer rounded-full border border-gray-300 bg-white py-2 px-4 hover:bg-gray-50 focus:outline-none peer-checked:border-transparent peer-checked:ring-2 peer-checked:ring-gray-500 transition-all duration-500 ease-in-out" for="yes">Details</label>

      <div class=" bg-white shadow-lg left-0 p-6 border mt-2 border-gray-300 rounded-lg w-[90vw] mx-auto transition-all duration-500 ease-in-out translate-x-40 opacity-0 invisible peer-checked:opacity-100 peer-checked:visible peer-checked:translate-x-1">
      
<div class="px-4 py-4 sm:px-6 lg:px-8">
      <div class="px-8 sm:flex sm:items-center">
        <div class="sm:flex-auto">
          <h1 class="pl-4 text-base font-semibold leading-6 text-gray-900">
            Users
          </h1>
          <p class="pl-4 mt-2 text-sm text-gray-700">
            A list of all the users in your account including their id, name,
            title, email and role.
          </p>
        </div>
        <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
          <button
            type="button"
            class="block rounded-md bg-blue-500 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 cursor-pointer"
          >
            Add user
          </button>
        </div>
      </div>
      <div
        class="mt-8 overflow-x-auto"
        x-data="{ users: [] }"
        x-init="users = fetchUsers()"
      >
        <div class="align-middle inline-block min-w-full sm:px-6 lg:px-8">
          <div class="overflow-hidden border-b border-gray-200">
            <table class="min-w-full divide-y divide-gray-300">
              <thead>
                <tr>
                  <th
                    scope="col"
                    class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-3"
                    x-text=""
                  >
                    Id
                  </th>
                  <th
                    scope="col"
                    class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-3"
                  >
                    Name
                  </th>
                  <th
                    scope="col"
                    class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900"
                  >
                    Company
                  </th>
                  <th
                    scope="col"
                    class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900"
                  >
                    Email
                  </th>
                  <th
                    scope="col"
                    class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900"
                  >
                    Role
                  </th>
                  <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-3">
                    <span class="sr-only">Edit</span>
                  </th>
                </tr>
              </thead>
              <tbody class="bg-white divide-y divide-gray-300 sm:divide-y-0">
                <template x-for="user in users" :key="user.id">
                  <tr class="even:bg-gray-50">
                    <td
                      class="py-3.5 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-3"
                      x-text="user.id"
                    ></td>
                    <td
                      class="py-3.5 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-3"
                      x-text="user.name"
                    ></td>
                    <td
                      class="px-3 py-3.5 text-sm text-gray-500 sm:whitespace-nowrap"
                      x-text="user.company.name"
                    ></td>
                    <td
                      class="px-3 py-3.5 text-sm text-gray-500 sm:whitespace-nowrap"
                      x-text="user.email"
                    ></td>
                    <td
                      class="px-3 py-3.5 text-sm text-gray-500 sm:whitespace-nowrap"
                      x-text="user.role"
                    ></td>
                    <td
                      class="relative py-3.5 pl-3 pr-4 text-right text-sm font-medium sm:pr-3"
                    >
                      <a href="#" class="text-indigo-600 hover:text-indigo-900"
                        >Edit</a
                      >
                    </td>
                  </tr>
                </template>
              </tbody>
            </table>
          </div>
        </div>
      </div>
</div>
    <script>
      function fetchUsers() {
        return axios
          .get("https://mocki.io/v1/2b236363-21bb-4388-93b0-ce60b42be5fe")
          .then((res) => {
            if (res.status === 200) {
              console.log(res.data);
              return res.data;
            } else {
              throw new Error("Failed to fetch data");
            }
          })
          .catch((err) => {
            console.log(err);
            return [];
          });
      }
    </script>
</div>
</li>

  <li class="">
    <input class="peer sr-only" type="radio" value="no" name="answer" id="no" />
    <label class="flex justify-center cursor-pointer rounded-full border border-gray-300 bg-white py-2 px-4 hover:bg-gray-50 focus:outline-none peer-checked:border-transparent peer-checked:ring-2 peer-checked:ring-gray-500 transition-all duration-500 ease-in-out" for="no">Clients</label>

      <div class="absolute bg-white shadow-lg left-12 p-6 border mt-2 border-gray-300 rounded-lg w-[90vw] mx-auto transition-all duration-500 ease-in-out translate-x-40 opacity-0 invisible peer-checked:opacity-100 peer-checked:visible peer-checked:translate-x-1">
      <div class="px-4 sm:px-6 lg:px-8">
  <div class="sm:flex sm:items-center">
    <div class="sm:flex-auto">
      <h1 class="text-base font-semibold leading-6 text-gray-900">Clients</h1>
      <p class="mt-2 text-sm text-gray-700">A list of all the clients in your account including their name, title, email and role.</p>
    </div>
    <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
      <button type="button" class="block rounded-md bg-blue-500 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 cursor-pointer">Add client</button>
    </div>
  </div>
  <div class="mt-8 flow-root">
    <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
        <table class="min-w-full divide-y divide-gray-300">
          <thead>
            <tr>
              <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-0">Name</th>
              <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Title</th>
              <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Email</th>
              <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Role</th>
              <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-0">
                <span class="sr-only">Edit</span>
              </th>
            </tr>
          </thead>
          <tbody class="divide-y divide-gray-200">
            <tr>
              <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-0">Lindsay Walton</td>
              <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Front-end Developer</td>
              <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">lindsay.walton@example.com</td>
              <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Member</td>
              <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-0">
                <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit<span class="sr-only">, Lindsay Walton</span></a>
              </td>
            </tr>

            <!-- More people... -->
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

    </div>
  </li>

  <li class="">
    <input class="peer sr-only" type="radio" value="yesno" name="answer" id="yesno" />
    <label class="flex justify-center cursor-pointer rounded-full border border-gray-300 bg-white py-2 px-4 hover:bg-gray-50 focus:outline-none peer-checked:border-transparent peer-checked:ring-2 peer-checked:ring-gray-500 transition-all duration-500 ease-in-out " for="yesno">Supliers</label>

      <div class="absolute bg-white shadow-lg left-10 p-6 border mt-2 border-gray-300 rounded-lg w-[90vw] mx-auto transition-all duration-500 ease-in-out translate-x-40 opacity-0 invisible peer-checked:opacity-100 peer-checked:visible peer-checked:translate-x-1">
      <div class="px-4 sm:px-6 lg:px-8">
  <div class="sm:flex sm:items-center">
    <div class="sm:flex-auto">
      <h1 class="text-base font-semibold leading-6 text-gray-900">Suplier</h1>
      <p class="mt-2 text-sm text-gray-700">A list of all the supliers in your account including their name, title, email and role.</p>
    </div>
    <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
      <button type="button" class="block rounded-md bg-blue-500 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 cursor-pointer">Add Suplier</button>
    </div>
  </div>
  <div class="mt-8 flow-root">
    <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
        <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 sm:rounded-lg">
          <table class="min-w-full divide-y divide-gray-300">
            <thead class="bg-gray-50">
              <tr>
                <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">Name</th>
                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Title</th>
                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Email</th>
                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Role</th>
                <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                  <span class="sr-only">Edit</span>
                </th>
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 bg-white">
              <tr>
                <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">Lindsay Walton</td>
                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Front-end Developer</td>
                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">lindsay.walton@example.com</td>
                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Member</td>
                <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                  <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit<span class="sr-only">, Lindsay Walton</span></a>
                </td>
              </tr>

              <!-- More people... -->
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</li>

</ul>

</div>