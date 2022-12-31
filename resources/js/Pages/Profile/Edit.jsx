// Import Core Libraries
import { Head } from "@inertiajs/inertia-react";

// Import Layouts
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";

// Import Partials
import UpdatePasswordForm from "@/Partials/Auth/UpdatePasswordForm";
import UpdateProfileInformationForm from "@/Partials/Auth/UpdateProfileInformationForm";

export default function Edit({ auth }) {
    return (
        <AuthenticatedLayout
            auth={auth}
            header={
                <h2 className="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    {transData("page.profile.title")}
                </h2>
            }
        >
            <Head title="Profile" />

            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                    <div className="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                        <UpdateProfileInformationForm className="max-w-xl" />
                    </div>

                    <div className="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                        <UpdatePasswordForm className="max-w-xl" />
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
