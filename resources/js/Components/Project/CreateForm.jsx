// Import Core Libraries
import { useState } from "react";
import { Inertia } from "@inertiajs/inertia";
import { Link } from "@inertiajs/inertia-react";

// Import Bootstrap Components
import Form from "react-bootstrap/Form";
import Button from "react-bootstrap/Button";

export default function CreateForm({ errors }) {
    const [validated, setValidated] = useState(false);
    const [values, setValues] = useState({
        title: "",
        description: "",
        image: null,
    });

    const handleChanges = (e) => {
        if (e.target.name === "image") {
            const reader = new FileReader();

            reader.onload = function (e) {
                $(".show-project-image").attr("src", e.target.result);
            };

            reader.readAsDataURL(e.target.files[0]);

            setValues({
                ...values,
                [e.target.name]: e.target.files[0],
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
        Inertia.post("/project", values);
    };

    return (
        <Form noValidate validated={validated} onSubmit={handleSubmit}>
            <Form.Group className="mb-3" controlId="title">
                <Form.Label>{transData("form.project.title")}</Form.Label>
                <Form.Control
                    type="text"
                    name="title"
                    placeholder={transData("form.project.placeholder.title")}
                    onChange={handleChanges}
                    required
                    autoFocus
                />
            </Form.Group>
            <Form.Control.Feedback type="invalid">
                {errors.title}
            </Form.Control.Feedback>
            <Form.Group className="mb-3" controlId="description">
                <Form.Label>{transData("form.project.description")}</Form.Label>
                <Form.Control
                    as="textarea"
                    rows={3}
                    name="description"
                    placeholder={transData(
                        "form.project.placeholder.description"
                    )}
                    onChange={handleChanges}
                    required
                    autoFocus
                />
            </Form.Group>
            <Form.Control.Feedback type="invalid">
                {errors.description}
            </Form.Control.Feedback>
            <Form.Group className="mb-3" controlId="image">
                <Form.Label>{transData("form.project.image")}</Form.Label>
                <img className="show-project-image mb-3" width={100} />
                <Form.Control
                    type="file"
                    name="image"
                    onChange={handleChanges}
                />
            </Form.Group>
            <Form.Control.Feedback type="invalid">
                {errors.image}
            </Form.Control.Feedback>
            <Link
                href={route("project.index")}
                as="button"
                className="btn btn-success me-2"
            >
                {transData("form.project.back")}
            </Link>
            <Button variant="primary" type="submit">
                {transData("form.project.submit")}
            </Button>
        </Form>
    );
}
