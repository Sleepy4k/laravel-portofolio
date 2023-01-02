// Import Core Libraries
import { useState } from "react";
import { Inertia } from "@inertiajs/inertia";
import { Link } from "@inertiajs/inertia-react";

// Import Bootstrap Components
import Form from "react-bootstrap/Form";
import Button from "react-bootstrap/Button";

// Import Custom Components
import InputError from "../../Components/InputError";

export default function CreateForm({ about, errors }) {
    const [validated, setValidated] = useState(false);
    const [values, setValues] = useState({
        name: about.name,
        hobby: about.hobby,
        interest: about.interest,
        description: about.description,
        mission: about.mission,
        image: null,
    });

    const handleChanges = (e) => {
        if (e.target.name === "image") {
            const reader = new FileReader();

            reader.onload = function (e) {
                $(".show-about-image").attr("src", e.target.result);
            };

            reader.readAsDataURL(e.target.files[0]);

            setValues({
                ...values,
                image: e.target.files[0],
            });
        } else {
            setValues({
                ...values,
                [e.target.name]: e.target.value,
            });
        }
    };

    const handleSubmit = (e) => {
        const form = e.currentTarget;
        e.preventDefault();

        if (form.checkValidity() === false) {
            e.stopPropagation();
        }

        setValidated(true);
        Inertia.post(route("about.store"), values);
    };

    return (
        <Form noValidate validated={validated} onSubmit={handleSubmit}>
            <Form.Group className="mb-3">
                <Form.Label htmlFor="name">
                    {transData("form.about.name")}
                </Form.Label>
                <Form.Control
                    type="text"
                    name="name"
                    placeholder={transData("form.about.placeholder.name")}
                    onChange={handleChanges}
                    defaultValue={about.name}
                    required
                    autoFocus
                />
                <InputError message={errors.name} className="mt-2" />
            </Form.Group>
            <Form.Group className="mb-3">
                <Form.Label htmlFor="hobby">
                    {transData("form.about.hobby")}
                </Form.Label>
                <Form.Control
                    type="text"
                    name="hobby"
                    placeholder={transData("form.about.placeholder.hobby")}
                    onChange={handleChanges}
                    defaultValue={about.hobby}
                    required
                    autoFocus
                />
                <InputError message={errors.hobby} className="mt-2" />
            </Form.Group>
            <Form.Group className="mb-3">
                <Form.Label htmlFor="interest">
                    {transData("form.about.interest")}
                </Form.Label>
                <Form.Control
                    type="text"
                    name="interest"
                    placeholder={transData("form.about.placeholder.interest")}
                    onChange={handleChanges}
                    defaultValue={about.interest}
                    required
                    autoFocus
                />
                <InputError message={errors.interest} className="mt-2" />
            </Form.Group>
            <Form.Group className="mb-3">
                <Form.Label htmlFor="description">
                    {transData("form.about.description")}
                </Form.Label>
                <Form.Control
                    as="textarea"
                    rows={3}
                    name="description"
                    placeholder={transData(
                        "form.about.placeholder.description"
                    )}
                    onChange={handleChanges}
                    defaultValue={about.description}
                    required
                    autoFocus
                />
                <InputError message={errors.description} className="mt-2" />
            </Form.Group>
            <Form.Group className="mb-3">
                <Form.Label htmlFor="mission">
                    {transData("form.about.mission")}
                </Form.Label>
                <Form.Control
                    as="textarea"
                    rows={3}
                    name="mission"
                    placeholder={transData("form.about.placeholder.mission")}
                    onChange={handleChanges}
                    defaultValue={about.mission}
                    required
                    autoFocus
                />
                <InputError message={errors.mission} className="mt-2" />
            </Form.Group>
            <Form.Group className="mb-3">
                <Form.Label htmlFor="image">
                    {transData("form.about.image")}
                </Form.Label>
                {about.image ? (
                    <img
                        src={"/storage/image/" + about.image}
                        alt={about.name}
                        className="show-about-image mb-3"
                        width={100}
                    />
                ) : (
                    <img
                        src={"/image/jumbotron/ayang.jpg"}
                        alt={about.name}
                        className="show-about-image mb-3"
                        width={100}
                    />
                )}
                <Form.Control
                    type="file"
                    name="image"
                    onChange={handleChanges}
                />
                <InputError message={errors.image} className="mt-2" />
                <Form.Text className="text-muted">
                    {transData("form.about.suggestion")}
                </Form.Text>
            </Form.Group>
            <Link
                href={route("about.index")}
                as="button"
                className="btn btn-success me-2"
            >
                {transData("form.about.back")}
            </Link>
            <Button variant="primary" type="submit">
                {transData("form.about.submit")}
            </Button>
        </Form>
    );
}
