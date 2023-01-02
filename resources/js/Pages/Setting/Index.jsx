// Import Core Libraries
import { Head } from "@inertiajs/inertia-react";

// Import Layouts
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";

// Import Partials
import Navbar from "@/Partials/Setting/Navbar";

export default function SettingIndex(props) {
    return (
        <AuthenticatedLayout auth={props.auth} errors={props.errors}>
            <Head title="Setting" />

            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div className="bg-white overflow-hidden shadow-xl sm:rounded-lg py-5 px-10">
                        <Navbar env={props.env} app={props.application} />
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
